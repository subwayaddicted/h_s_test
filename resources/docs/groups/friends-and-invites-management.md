# Friends and invites management


## Create new friend

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/friends/send" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"friends_id":1}'

```

```javascript
const url = new URL(
    "http://localhost/api/friends/send"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "friends_id": 1
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-friends-send" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-friends-send"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-friends-send"></code></pre>
</div>
<div id="execution-error-POSTapi-friends-send" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-friends-send"></code></pre>
</div>
<form id="form-POSTapi-friends-send" data-method="POST" data-path="api/friends/send" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-friends-send', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-friends-send" onclick="tryItOut('POSTapi-friends-send');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-friends-send" onclick="cancelTryOut('POSTapi-friends-send');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-friends-send" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/friends/send</code></b>
</p>
<p>
<label id="auth-POSTapi-friends-send" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-friends-send" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>friends_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="friends_id" data-endpoint="POSTapi-friends-send" data-component="body"  hidden>
<br>
Id of the user friend request will be sent to.</p>

</form>


## Accept friend invite

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/friends/accept" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"friends_id":2}'

```

```javascript
const url = new URL(
    "http://localhost/api/friends/accept"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "friends_id": 2
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-friends-accept" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-friends-accept"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-friends-accept"></code></pre>
</div>
<div id="execution-error-POSTapi-friends-accept" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-friends-accept"></code></pre>
</div>
<form id="form-POSTapi-friends-accept" data-method="POST" data-path="api/friends/accept" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-friends-accept', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-friends-accept" onclick="tryItOut('POSTapi-friends-accept');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-friends-accept" onclick="cancelTryOut('POSTapi-friends-accept');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-friends-accept" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/friends/accept</code></b>
</p>
<p>
<label id="auth-POSTapi-friends-accept" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-friends-accept" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>friends_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="friends_id" data-endpoint="POSTapi-friends-accept" data-component="body"  hidden>
<br>
Id of the user friend request was sent from.</p>

</form>


## Decline friend invite

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/friends/decline" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"friends_id":2}'

```

```javascript
const url = new URL(
    "http://localhost/api/friends/decline"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "friends_id": 2
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-friends-decline" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-friends-decline"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-friends-decline"></code></pre>
</div>
<div id="execution-error-GETapi-friends-decline" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-friends-decline"></code></pre>
</div>
<form id="form-GETapi-friends-decline" data-method="GET" data-path="api/friends/decline" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-friends-decline', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-friends-decline" onclick="tryItOut('GETapi-friends-decline');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-friends-decline" onclick="cancelTryOut('GETapi-friends-decline');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-friends-decline" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/friends/decline</code></b>
</p>
<p>
<label id="auth-GETapi-friends-decline" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-friends-decline" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>friends_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="friends_id" data-endpoint="GETapi-friends-decline" data-component="body"  hidden>
<br>
Id of the user friend request was sent from.</p>

</form>


## Show all relations




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/friends" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/friends"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "user_id": 1,
        "friends_id": 2,
        "accepted": 0,
        "created_at": "2020-11-01T23:24:09.000000Z",
        "updated_at": "2020-11-01T23:43:56.000000Z"
    },
    {
        "id": 2,
        "user_id": 1,
        "friends_id": 3,
        "accepted": 0,
        "created_at": "2020-11-01T23:24:20.000000Z",
        "updated_at": "2020-11-01T23:24:20.000000Z"
    },
    {
        "id": 3,
        "user_id": 2,
        "friends_id": 7,
        "accepted": 0,
        "created_at": "2020-11-02T01:27:43.000000Z",
        "updated_at": "2020-11-02T01:27:43.000000Z"
    },
    {
        "id": 4,
        "user_id": 2,
        "friends_id": 8,
        "accepted": 0,
        "created_at": "2020-11-02T01:27:47.000000Z",
        "updated_at": "2020-11-02T01:27:47.000000Z"
    },
    {
        "id": 10,
        "user_id": 2,
        "friends_id": 1,
        "accepted": 0,
        "created_at": "2020-11-02T02:26:02.000000Z",
        "updated_at": "2020-11-02T02:26:02.000000Z"
    }
]
```
<div id="execution-results-GETapi-friends" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-friends"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-friends"></code></pre>
</div>
<div id="execution-error-GETapi-friends" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-friends"></code></pre>
</div>
<form id="form-GETapi-friends" data-method="GET" data-path="api/friends" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-friends', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-friends" onclick="tryItOut('GETapi-friends');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-friends" onclick="cancelTryOut('GETapi-friends');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-friends" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/friends</code></b>
</p>
</form>


## Show friend record




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/friends/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/friends/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "user_id": 1,
        "friends_id": 2,
        "accepted": 0,
        "created_at": "2020-11-01T23:24:09.000000Z",
        "updated_at": "2020-11-01T23:43:56.000000Z"
    }
]
```
<div id="execution-results-GETapi-friends--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-friends--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-friends--id-"></code></pre>
</div>
<div id="execution-error-GETapi-friends--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-friends--id-"></code></pre>
</div>
<form id="form-GETapi-friends--id-" data-method="GET" data-path="api/friends/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-friends--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-friends--id-" onclick="tryItOut('GETapi-friends--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-friends--id-" onclick="cancelTryOut('GETapi-friends--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-friends--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/friends/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-friends--id-" data-component="url"  hidden>
<br>
Id of the record to show.</p>
</form>


## Update friend record




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/friends/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":1,"friends_id":2,"accepted":false}'

```

```javascript
const url = new URL(
    "http://localhost/api/friends/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 1,
    "friends_id": 2,
    "accepted": false
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-friends--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-friends--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-friends--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-friends--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-friends--id-"></code></pre>
</div>
<form id="form-PUTapi-friends--id-" data-method="PUT" data-path="api/friends/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-friends--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-friends--id-" onclick="tryItOut('PUTapi-friends--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-friends--id-" onclick="cancelTryOut('PUTapi-friends--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-friends--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/friends/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-friends--id-" data-component="url"  hidden>
<br>
Id of the record to update.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-friends--id-" data-component="body"  hidden>
<br>
Id of the user friend request was sent from.</p>
<p>
<b><code>friends_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="friends_id" data-endpoint="PUTapi-friends--id-" data-component="body"  hidden>
<br>
Id of the user friend request was sent to.</p>
<p>
<b><code>accepted</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-friends--id-" hidden><input type="radio" name="accepted" value="true" data-endpoint="PUTapi-friends--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-friends--id-" hidden><input type="radio" name="accepted" value="false" data-endpoint="PUTapi-friends--id-" data-component="body" ><code>false</code></label>
<br>
Status of the friend request.</p>

</form>


## Delete friend record




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/friends/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/friends/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-friends--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-friends--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-friends--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-friends--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-friends--id-"></code></pre>
</div>
<form id="form-DELETEapi-friends--id-" data-method="DELETE" data-path="api/friends/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-friends--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-friends--id-" onclick="tryItOut('DELETEapi-friends--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-friends--id-" onclick="cancelTryOut('DELETEapi-friends--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-friends--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/friends/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-friends--id-" data-component="url"  hidden>
<br>
Id of the record to delete.</p>
</form>



