# Anti-CSRF tokens

A form that carries a token, and the handler that checks it before making a change.

## The attack this prevents

Cross-site request forgery works by getting a logged-in user's browser to send a request the user did not intend. A page on another site can contain a form or an image tag pointing at your application, and the browser attaches the session cookie automatically. The request looks entirely legitimate from the server's side.

## Why a token stops it

The token is unpredictable and lives in the session. An attacking page can cause a request to be sent, but the same-origin policy stops it from reading your page, so it cannot learn the token to include. A request without the correct token is rejected.

`hash_equals()` is used rather than `==` because it takes the same time regardless of where two values first differ, which avoids leaking information through timing.

## A complementary measure

Setting session cookies with `SameSite=Lax` or `SameSite=Strict` tells the browser not to send them on cross-site requests, which blocks the same pattern from a different direction. Using both is common.
