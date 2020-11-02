# Authentication management


## Login user and create token




> Example request:

```bash
curl -X POST \
    "http://localhost/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sed","password":"facilis","remember_me":false}'

```

```javascript
const url = new URL(
    "http://localhost/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sed",
    "password": "facilis",
    "remember_me": false
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTauth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTauth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-login"></code></pre>
</div>
<div id="execution-error-POSTauth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-login"></code></pre>
</div>
<form id="form-POSTauth-login" data-method="POST" data-path="auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTauth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTauth-login" onclick="tryItOut('POSTauth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTauth-login" onclick="cancelTryOut('POSTauth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTauth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>auth/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTauth-login" data-component="body"  hidden>
<br>
An email of the user.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password" data-endpoint="POSTauth-login" data-component="body"  hidden>
<br>
The password of the user.</p>
<p>
<b><code>remember_me</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTauth-login" hidden><input type="radio" name="remember_me" value="true" data-endpoint="POSTauth-login" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTauth-login" hidden><input type="radio" name="remember_me" value="false" data-endpoint="POSTauth-login" data-component="body" ><code>false</code></label>
<br>
Remember me token.</p>

</form>


## Create user




> Example request:

```bash
curl -X POST \
    "http://localhost/auth/signup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"at","email":"itaque","password":"sint"}'

```

```javascript
const url = new URL(
    "http://localhost/auth/signup"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "at",
    "email": "itaque",
    "password": "sint"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTauth-signup" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTauth-signup"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-signup"></code></pre>
</div>
<div id="execution-error-POSTauth-signup" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-signup"></code></pre>
</div>
<form id="form-POSTauth-signup" data-method="POST" data-path="auth/signup" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTauth-signup', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTauth-signup" onclick="tryItOut('POSTauth-signup');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTauth-signup" onclick="cancelTryOut('POSTauth-signup');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTauth-signup" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>auth/signup</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTauth-signup" data-component="body"  hidden>
<br>
The name of the user.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTauth-signup" data-component="body"  hidden>
<br>
An email of the user.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password" data-endpoint="POSTauth-signup" data-component="body"  hidden>
<br>
The password of the user.</p>

</form>


## Logout user (Revoke the token)

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/auth/logout" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/auth/logout"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETauth-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETauth-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETauth-logout"></code></pre>
</div>
<div id="execution-error-GETauth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETauth-logout"></code></pre>
</div>
<form id="form-GETauth-logout" data-method="GET" data-path="auth/logout" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETauth-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETauth-logout" onclick="tryItOut('GETauth-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETauth-logout" onclick="cancelTryOut('GETauth-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETauth-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>auth/logout</code></b>
</p>
<p>
<label id="auth-GETauth-logout" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETauth-logout" data-component="header"></label>
</p>
</form>


## Get the authenticated User info

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/auth/user" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/auth/user"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETauth-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETauth-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETauth-user"></code></pre>
</div>
<div id="execution-error-GETauth-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETauth-user"></code></pre>
</div>
<form id="form-GETauth-user" data-method="GET" data-path="auth/user" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETauth-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETauth-user" onclick="tryItOut('GETauth-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETauth-user" onclick="cancelTryOut('GETauth-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETauth-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>auth/user</code></b>
</p>
<p>
<label id="auth-GETauth-user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETauth-user" data-component="header"></label>
</p>
</form>



