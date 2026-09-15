/**
 * gads-conversions.js — Google Ads conversion events (account AW-18420265541).
 *
 * Loaded sitewide (deferred) by includes/footer.php whenever $googleAdsId is
 * configured. The Google tag itself (gtag.js + gtag('config')) is rendered by
 * includes/head.php — this file only reports conversions.
 *
 * Conversions:
 *   - "Phone Click - Website": any click on a tel:/sms: anchor, sitewide,
 *     including anchors added after load. Never preventDefault — the dialer
 *     opens immediately and the ping is fire-and-forget.
 *   - "Contact" (Ads) + GA4 `estimate_request`: a SUCCESSFUL form submission. Both forms
 *     POST to the leads edge function, which only 303s to /thank-you after it
 *     accepts the lead, so the conversion fires on the thank-you page
 *     (footer.php marks this script with data-form-conversion="1" there) —
 *     never on button click or on a client-side validation failure.
 */
(function () {
  'use strict';
  var SEND_FORM  = 'AW-18420265541/JPlOCPvTvfEcEMXku89E';
  var SEND_PHONE = 'AW-18420265541/L8xuCMT29_gcEMXku89E';

  function report(sendTo, cb) {
    if (typeof gtag !== 'function') { if (cb) cb(); return; }
    var done = false;
    var finish = function () { if (!done) { done = true; if (cb) cb(); } };
    gtag('event', 'conversion', { send_to: sendTo, value: 1.0, currency: 'USD', event_callback: finish });
    setTimeout(finish, 1500); // never block the user if gtag stalls / is blocked
  }

  // Phone + SMS clicks (all tel:/sms: anchors, including ones added later)
  document.addEventListener('click', function (e) {
    var t = e.target;
    if (t && !t.closest) t = t.parentElement; // text/SVG nodes without Element API
    var a = t && t.closest ? t.closest('a[href^="tel:"], a[href^="sms:"]') : null;
    if (!a) return;
    report(SEND_PHONE); // don't preventDefault — let the dialer open immediately
  }, true);

  // Form success — only when footer.php flagged this page as the thank-you page.
  var me = document.currentScript || document.querySelector('script[src*="gads-conversions"]');
  if (me && me.getAttribute('data-form-conversion') === '1') {
    // Guard against a refresh / back-forward reload of the thank-you page
    // counting the same lead twice.
    var key = 'p1GadsFormFired', already = false;
    try { already = sessionStorage.getItem(key) === '1'; } catch (err) { /* private mode */ }
    if (!already) {
      try { sessionStorage.setItem(key, '1'); } catch (err) { /* private mode */ }
      report(SEND_FORM);
      // GA4 key event — same success signal as the Ads conversion, so the two
      // systems count identical leads (unlike enhanced-measurement form_submit,
      // which fires on the click and can be lost during navigation).
      if (typeof gtag === 'function') {
        gtag('event', 'estimate_request', { form_location: 'thank-you', method: 'form' });
      }
    }
  }
})();
