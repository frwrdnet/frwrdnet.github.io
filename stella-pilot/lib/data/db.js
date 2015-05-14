/* database */

var db =
{
	/** Experiences ********************************************************* */
	"experiences": [
		{
			"id": "exp-00000001",
			"data": {
				"name": "Introduction to IoE",
				"type": "Online Course", 
				"description": "[Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet...]",
				"instructor": "John Doe",
				"time-start": "2015-08-02T07:00:00+0000",
				"time-end": "2015-09-15T21:00:00+0000"
			}
		},
		{
			"id": "exp-00000002",
			"data": {
				"name": "Programming for Data Analysis",
				"type": "Online Course", 
				"description": "[Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet...]",
				"instructor": "John Doe",
				"time-start": "2015-08-02T07:00:00+0000",
				"time-end": "2015-09-15T21:00:00+0000"
			}
		},
		{
			"id": "exp-00000003",
			"data": {
				"name": "What will I connect?",
				"type": "Online Course", 
				"description": "[Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet...]",
				"instructor": "John Doe",
				"time-start": "2015-08-02T07:00:00+0000",
				"time-end": "2015-09-15T21:00:00+0000"
			}
		},
		{
			"id": "exp-00000004",
			"data": {
				"name": "Name_of_Course_Goes_Here",
				"type": "Online Course", 
				"description": "[Description_of_Course_Goes_Here]",
				"instructor": "Instructor_Name_Goes_Here",
				"time-start": "2015-01-01T00:00:00+0000",
				"time-end": "2015-01-01T00:00:00+0000"
			}
		},
		{
			"id": "exp-00000005",
			"data": {
				"name": "Name_of_Course_Goes_Here",
				"type": "Online Course", 
				"description": "[Description_of_Course_Goes_Here]",
				"instructor": "Instructor_Name_Goes_Here",
				"time-start": "2015-01-01T00:00:00+0000",
				"time-end": "2015-01-01T00:00:00+0000"
			}
		},
		{
			"id": "exp-00000006",
			"data": {
				"name": "Name_of_Course_Goes_Here",
				"type": "Online Course", 
				"description": "[Description_of_Course_Goes_Here]",
				"instructor": "Instructor_Name_Goes_Here",
				"time-start": "2015-01-01T00:00:00+0000",
				"time-end": "2015-01-01T00:00:00+0000"
			}
		},
	],
	/** Spaces ********************************************************* */
	"spaces": [
		{
			"id": "SPACE-00000001",
			"name": "Physical Computing",
			"description": "[Description of the space goes here]",
			"members": "20",
			"discussions": "10",
			"recent_post": {
				"username": "James",
				"content": "I don't think we can attach the Arduino MP to the relay, it'll blow it probably.",
				"timestamp": "2015-08-02T07:00:00+0000",
				"uid": "SpaceName/DiscussionName/PostID"
			},
			"recent_users": [
				{
					"username": "username1",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username2",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username3",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username4",
					"avatar": "lib/img/?36x36"
				},
			],
			"time-created": "2015-08-02T07:00:00+0000",
			"time-updated": "2015-09-15T21:00:00+0000"
		},
		{
			"id": "SPACE-00000002",
			"name": "Hardware Hackers",
			"description": "[Description of the space goes here]",
			"members": "20",
			"discussions": "10",
			"recent_post": {
				"username": "Stella",
				"content": "I don't think we can attach the Arduino MP to the relay, it'll blow it probably.",
				"timestamp": "2015-08-02T07:00:00+0000",
				"uid": "SpaceName/DiscussionName/PostID"
			},
			"recent_users": [
				{
					"username": "username1",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username2",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username3",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username4",
					"avatar": "lib/img/?36x36"
				},
			],
			"time-created": "2015-08-02T07:00:00+0000",
			"time-updated": "2015-09-15T21:00:00+0000"
		},
		{
			"id": "SPACE-00000003",
			"name": "Network Programming Discussions",
			"description": "[Description of the space goes here]",
			"members": "20",
			"discussions": "10",
			"recent_post": {
				"username": "Rebekah",
				"content": "I don't think we can attach the Arduino MP to the relay, it'll blow it probably.",
				"timestamp": "2015-08-02T07:00:00+0000",
				"uid": "SpaceName/DiscussionName/PostID"
			},
			"recent_users": [
				{
					"username": "username1",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username2",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username3",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username4",
					"avatar": "lib/img/?36x36"
				},
			],
			"time-created": "2015-08-02T07:00:00+0000",
			"time-updated": "2015-09-15T21:00:00+0000"
		},
		{
			"id": "SPACE-00000004",
			"name": "Tech Tools and Trades",
			"description": "[Description of the space goes here]",
			"members": "20",
			"discussions": "10",
			"recent_post": {
				"username": "James",
				"content": "I don't think we can attach the Arduino MP to the relay, it'll blow it probably.",
				"timestamp": "2015-08-02T07:00:00+0000",
				"uid": "SpaceName/DiscussionName/PostID"
			},
			"recent_users": [
				{
					"username": "username1",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username2",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username3",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username4",
					"avatar": "lib/img/?36x36"
				},
			],
			"time-created": "2015-08-02T07:00:00+0000",
			"time-updated": "2015-09-15T21:00:00+0000"
		},
		{
			"id": "SPACE-00000005",
			"name": "Programmer\'s Den",
			"description": "[Description of the space goes here]",
			"members": "20",
			"discussions": "10",
			"recent_post": {
				"username": "Phil",
				"content": "I don't think we can attach the Arduino MP to the relay, it'll blow it probably.",
				"timestamp": "2015-08-02T07:00:00+0000",
				"uid": "SpaceName/DiscussionName/PostID"
			},
			"recent_users": [
				{
					"username": "username1",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username2",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username3",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username4",
					"avatar": "lib/img/?36x36"
				},
			],
			"time-created": "2015-08-02T07:00:00+0000",
			"time-updated": "2015-09-15T21:00:00+0000"
		},
		{
			"id": "SPACE-00000006",
			"name": "SysAdmin\'s Space",
			"description": "[Description of the space goes here]",
			"members": "20",
			"discussions": "10",
			"recent_post": {
				"username": "Dana",
				"content": "I don't think we can attach the Arduino MP to the relay, it'll blow it probably.",
				"timestamp": "2015-08-02T07:00:00+0000",
				"uid": "SpaceName/DiscussionName/PostID"
			},
			"recent_users": [
				{
					"username": "username1",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username2",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username3",
					"avatar": "lib/img/?36x36"
				},
				{
					"username": "username4",
					"avatar": "lib/img/?36x36"
				},
			],
			"time-created": "2015-08-02T07:00:00+0000",
			"time-updated": "2015-09-15T21:00:00+0000"
		},
		
	],
	/** Jobs ********************************************************* */
	"jobs": [
		{
			"id": "JOB-00000001",
			"title": "Data Analyst",
			"company": "Honeywell", 
			"description": "[Description_of_Job_Goes_Here]",
			"location": "San Jose, CA",
			"date-added": "2015-01-01T00:00:00+0000",
			"date-expiration": "2015-01-01T00:00:00+0000"
		},
		{
			"id": "JOB-00000002",
			"title": "Data Analyst",
			"company": "Honeywell", 
			"description": "[Description_of_Job_Goes_Here]",
			"location": "San Jose, CA",
			"date-added": "2015-01-01T00:00:00+0000",
			"date-expiration": "2015-01-01T00:00:00+0000"
		},
		{
			"id": "JOB-00000003",
			"title": "Data Analyst",
			"company": "Honeywell", 
			"description": "[Description_of_Job_Goes_Here]",
			"location": "San Jose, CA",
			"date-added": "2015-01-01T00:00:00+0000",
			"date-expiration": "2015-01-01T00:00:00+0000"
		},
		{
			"id": "JOB-00000004",
			"title": "Data Analyst",
			"company": "Honeywell", 
			"description": "[Description_of_Job_Goes_Here]",
			"location": "San Jose, CA",
			"date-added": "2015-01-01T00:00:00+0000",
			"date-expiration": "2015-01-01T00:00:00+0000"
		},
		{
			"id": "JOB-00000005",
			"title": "Data Analyst",
			"company": "Honeywell", 
			"description": "[Description_of_Job_Goes_Here]",
			"location": "San Jose, CA",
			"date-added": "2015-01-01T00:00:00+0000",
			"date-expiration": "2015-01-01T00:00:00+0000"
		},
		{
			"id": "JOB-00000006",
			"title": "Data Analyst",
			"company": "Honeywell", 
			"description": "[Description_of_Job_Goes_Here]",
			"location": "San Jose, CA",
			"date-added": "2015-01-01T00:00:00+0000",
			"date-expiration": "2015-01-01T00:00:00+0000"
		},
	]
}

/* EXAMPLE 
{
   "data": [
      {
         "id": "X999_Y999",
         "from": {
            "name": "Tom Brady", "id": "X12"
         },
         "message": "Looking forward to 2010!",
         "actions": [
            {
               "name": "Comment",
               "link": "http://www.facebook.com/X999/posts/Y999"
            },
            {
               "name": "Like",
               "link": "http://www.facebook.com/X999/posts/Y999"
            }
         ],
         "type": "status",
         "created_time": "2010-08-02T21:27:44+0000",
         "updated_time": "2010-08-02T21:27:44+0000"
      },
      {
         "id": "X998_Y998",
         "from": {
            "name": "Peyton Manning", "id": "X18"
         },
         "message": "Where's my contract?",
         "actions": [
            {
               "name": "Comment",
               "link": "http://www.facebook.com/X998/posts/Y998"
            },
            {
               "name": "Like",
               "link": "http://www.facebook.com/X998/posts/Y998"
            }
         ],
         "type": "status",
         "created_time": "2010-08-02T21:27:44+0000",
         "updated_time": "2010-08-02T21:27:44+0000"
      }
   ]
}
*/