Hermes Message
=====================

That project is a Web Service API to manage messages (with 140 characteres).

How to use?
=====================

You will follow the steps below:

1. Fork and clone this project;
2. Go to root directory;
2. Create your database, running the command: **php app/console doctrine:database:create**;
3. Update you database, running the command: **php app/console doctrine:database:update --force --complete**;
4. You must create a token on entity **AccessToken**;
5. Start a PHP server running the command: **php app/console server:run**;

OK, now, you can use this webservice to:

- List messages;
- Create new message;
- Delete a message;

Create a new message
=====================

You can create a new message sending a data for url http://server-url/api/message/create (METHOD: PUT)

The url should receive:

**HTTP Header:**
Content-Type: application/x-www-form-urlencoded
token: your-access-token

**Parameters data:**
data: 
```json
{
	"message": "Your message"
}
```

Result:
```json
{
	"status": "success",
	"message": "Added message teste para Social Base",
	"hasError": false
}
```

List message
=====================

You can list message sending a data for url http://server-url/api/message/list/{page}/{limit} (METHOD: GET)

**HTTP Header:**
Content-Type: application/x-www-form-urlencoded
token: your-access-token

Result:
```json
{
	"status": "success",
	"entities":
		0:  {
			"id": 3,
			"message": "lorem ipsum dolor sit amet",
			"createdAt": "16/06/2016 19:38:21",
			"updatedAt": "16/06/2016 19:38:21"
		},
		1:  {
			"id": 4,
			"message": "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
			"createdAt": "16/06/2016 19:39:12",
			"updatedAt": "16/06/2016 19:39:12"
		}
	"hasError": false,
	"page": "1",
	"limit": "2"
}
```

List message
=====================

You can delete a message sending a data for url http://server-url/api/message/{id}/delete (METHOD: DELETE)

**HTTP Header:**
Content-Type: application/x-www-form-urlencoded
token: your-access-token

Result:
```json
{
	"status": "success",
	"message": "Deleted message lorem ipsum dolor sit amet",
	"hasError": false
}
```

For all URL, if you will request using incorrect access token, the result:
```json
{
	"status": "error",
	"message": "Invalid Access Token",
	"hasError": true
}
```

Conclusion
========================

You can fork that and developer your needs, after you can send a pull request.

License
========================

[MIT License](http://leonardorifeli.mit-license.org/) © Leonardo Rifeli
