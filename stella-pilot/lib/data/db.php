<?php

/* database */
$db = array(
	
	"stella" => array(
		"title" => "Welcome to [Stella]",
		"description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet.",
	),
	
	/* Experiences Database ****************************************************** */
	"experiences" => array(
		array(
			"id" => "exp-00000001",
			"name" => "Introduction to IoE",
			"type" => "Online Course", 
			"description" => "Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet...",
			"instructor" => "Andrea Casals",
			"time-start" => "2015-02-08 07:00:00",
			"time-end" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "exp-00000002",
			"name" => "Programming for Data Analysis",
			"type" => "Online Course", 
			"description" => "Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet...",
			"instructor" => "John Doe",
			"time-start" => "2015-02-08 07:00:00",
			"time-end" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "exp-00000003",
			"name" => "What will I connect?",
			"type" => "Online Course", 
			"description" => "Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet...",
			"instructor" => "John Doe",
			"time-start" => "2015-02-08 07:00:00",
			"time-end" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "exp-00000004",
			"name" => "Name of Course Goes Here",
			"type" => "Online Course", 
			"description" => "Description of course goes here",
			"instructor" => "Name of Instructor",
			"time-start" => "2015-01-01 00:00:00",
			"time-end" => "2015-01-01 00:00:00"
		),
		array(
			"id" => "exp-00000005",
			"name" => "Name of Course Goes Here",
			"type" => "Online Course", 
			"description" => "Description of course goes here",
			"instructor" => "Name of Instructor",
			"time-start" => "2015-01-01 00:00:00",
			"time-end" => "2015-01-01 00:00:00"
		),
		array(
			"id" => "exp-00000006",
			"name" => "Name of Course Goes Here",
			"type" => "Online Course", 
			"description" => "Description of course goes here",
			"instructor" => "Name of Instructor",
			"time-start" => "2015-01-01 00:00:00",
			"time-end" => "2015-01-01 00:00:00"
		)
	),
	
	
	/* Spaces Database ****************************************************** */
	"spaces" => array(
		array(
			"id" => "SPACE-00000001",
			"name" => "Physical Computing",
			"description" => "Description of space goes here",
			"members" => "20",
			"discussions" => "10",
			"recent_post" => array(
				"username" => "James",
				"content" => "I do not think we can attach the Arduino MP to the relay, it will blow it probably.",
				"timestamp" => "2015-02-08 07:00:00",
				"uid" => "SpaceName/DiscussionName/PostID"
			),
			"recent_users" => array(
				array(
					"username" => "username1",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username2",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username3",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username4",
					"avatar" => "lib/img/?36x36"
				)
			),
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "SPACE-00000002",
			"name" => "Hardware Hackers",
			"description" => "Description of space goes here",
			"members" => "20",
			"discussions" => "10",
			"recent_post" => array(
				"username" => "Stella",
				"content" => "I do not think we can attach the Arduino MP to the relay, it will blow it probably.",
				"timestamp" => "2015-02-08 07:00:00",
				"uid" => "SpaceName/DiscussionName/PostID"
			),
			"recent_users" => array(
				array(
					"username" => "username1",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username2",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username3",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username4",
					"avatar" => "lib/img/?36x36"
				)
			),
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "SPACE-00000003",
			"name" => "Network Programming Discussions",
			"description" => "Description of space goes here",
			"members" => "20",
			"discussions" => "10",
			"recent_post" => array(
				"username" => "Rebekah",
				"content" => "I do not think we can attach the Arduino MP to the relay, it will blow it probably.",
				"timestamp" => "2015-02-08 07:00:00",
				"uid" => "SpaceName/DiscussionName/PostID"
			),
			"recent_users" => array(
				array(
					"username" => "username1",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username2",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username3",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username4",
					"avatar" => "lib/img/?36x36"
				)
			),
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "SPACE-00000004",
			"name" => "Tech Tools and Trades",
			"description" => "Description of space goes here",
			"members" => "20",
			"discussions" => "10",
			"recent_post" => array(
				"username" => "James",
				"content" => "I do not think we can attach the Arduino MP to the relay, it will blow it probably.",
				"timestamp" => "2015-02-08 07:00:00",
				"uid" => "SpaceName/DiscussionName/PostID"
			),
			"recent_users" => array(
				array(
					"username" => "username1",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username2",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username3",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username4",
					"avatar" => "lib/img/?36x36"
				)
			),
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "SPACE-00000005",
			"name" => "Programmer\'s Den",
			"description" => "Description of space goes here",
			"members" => "20",
			"discussions" => "10",
			"recent_post" => array(
				"username" => "Phil",
				"content" => "I do not think we can attach the Arduino MP to the relay, it will blow it probably.",
				"timestamp" => "2015-02-08 07:00:00",
				"uid" => "SpaceName/DiscussionName/PostID"
			),
			"recent_users" => array(
				array(
					"username" => "username1",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username2",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username3",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username4",
					"avatar" => "lib/img/?36x36"
				)
			),
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "SPACE-00000006",
			"name" => "SysAdmin\'s Space",
			"description" => "Description of space goes here",
			"members" => "20",
			"discussions" => "10",
			"recent_post" => array(
				"username" => "Dana",
				"content" => "I do not think we can attach the Arduino MP to the relay, it will blow it probably.",
				"timestamp" => "2015-02-08 07:00:00",
				"uid" => "SpaceName/DiscussionName/PostID"
			),
			"recent_users" => array(
				array(
					"username" => "username1",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username2",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username3",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username4",
					"avatar" => "lib/img/?36x36"
				)
			),
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00"
		),
	),
	
	
	/* Space Database ****************************************************** */
	"space" => array(
		array(
			"id" => "THREAD-00000001",
			"name" => "Are you a beginner to arduino?",
			"members" => "12",
			"replies" => "32",
			"recent_post" => array(
				"username" => "James",
				"content" => "I do not think we can attach the Arduino MP to the relay, it will blow it probably.",
				"timestamp" => "2015-02-08 07:00:00",
				"uid" => "DiscussionName/PostID"
			),
			"recent_users" => array(
				array(
					"username" => "username1",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username2",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username3",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username4",
					"avatar" => "lib/img/?36x36"
				)
			),
			"started_by" => "Victor",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "THREAD-00000002",
			"name" => "Best computer for the program",
			"members" => "4",
			"replies" => "9",
			"recent_post" => array(
				"username" => "Stella",
				"content" => "I do not think we can attach the Arduino MP to the relay, it will blow it probably.",
				"timestamp" => "2015-02-08 07:00:00",
				"uid" => "SpaceName/DiscussionName/PostID"
			),
			"recent_users" => array(
				array(
					"username" => "username1",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username2",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username3",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username4",
					"avatar" => "lib/img/?36x36"
				)
			),
			"started_by" => "Deepak",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "THREAD-00000003",
			"name" => "Network Programming Discussions",
			"members" => "20",
			"replies" => "10",
			"recent_post" => array(
				"username" => "Rebekah",
				"content" => "I do not think we can attach the Arduino MP to the relay, it will blow it probably.",
				"timestamp" => "2015-02-08 07:00:00",
				"uid" => "SpaceName/DiscussionName/PostID"
			),
			"recent_users" => array(
				array(
					"username" => "username1",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username2",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username3",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username4",
					"avatar" => "lib/img/?36x36"
				)
			),
			"started_by" => "Beba",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "THREAD-00000004",
			"name" => "Tech Tools and Trades",
			"members" => "20",
			"replies" => "10",
			"recent_post" => array(
				"username" => "James",
				"content" => "I do not think we can attach the Arduino MP to the relay, it will blow it probably.",
				"timestamp" => "2015-02-08 07:00:00",
				"uid" => "SpaceName/DiscussionName/PostID"
			),
			"recent_users" => array(
				array(
					"username" => "username1",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username2",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username3",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username4",
					"avatar" => "lib/img/?36x36"
				)
			),
			"started_by" => "Lea",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "THREAD-00000005",
			"name" => "Programmer\'s Den",
			"members" => "20",
			"replies" => "10",
			"recent_post" => array(
				"username" => "Phil",
				"content" => "I do not think we can attach the Arduino MP to the relay, it will blow it probably.",
				"timestamp" => "2015-02-08 07:00:00",
				"uid" => "SpaceName/DiscussionName/PostID"
			),
			"recent_users" => array(
				array(
					"username" => "username1",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username2",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username3",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username4",
					"avatar" => "lib/img/?36x36"
				)
			),
			"started_by" => "Olmedo",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00"
		),
		array(
			"id" => "THREAD-00000006",
			"name" => "SysAdmin\'s Space",
			"members" => "20",
			"replies" => "10",
			"recent_post" => array(
				"username" => "Dana",
				"content" => "I do not think we can attach the Arduino MP to the relay, it will blow it probably.",
				"timestamp" => "2015-02-08 07:00:00",
				"uid" => "SpaceName/DiscussionName/PostID"
			),
			"recent_users" => array(
				array(
					"username" => "username1",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username2",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username3",
					"avatar" => "lib/img/?36x36"
				),
				array(
					"username" => "username4",
					"avatar" => "lib/img/?36x36"
				)
			),
			"started_by" => "Rashida",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00"
		),
	
	),
	
	
	/* Thread Database ****************************************************** */
	"thread" => array(
		array(
			"id" => "REPLY-00000001",
			"username" => "James",
			"avatar" => "lib/img/?36x36",
			"content" => "The Introduction to the Internet of Everything course provides an overview of the concepts and challenges of the transformational IoE economy. The course discusses the Internet and its evolution to the interconnection of people, processes, data, and things that forms the Internet of Everything.
 
The course introduces the concept of a network foundation connecting billions of things and trillions of gigabytes of data to enhance our decision making and interactions. Course modules describe how IOE drives the convergence between an organization’s operational technology (OT) and information technology (IT) systems, the business processes for evaluating a problem and implementing an IoE solution, and the machine-to-machine (M2M), machine-to-people (M2P), and people-to-people (P2P) connections in an IoE solution.",
			"timestamp" => "2015-02-08 07:00:00",
			"uid" => "PostID",
		),
		array(
			"id" => "REPLY-00000002",
			"username" => "Andrea",
			"avatar" => "lib/img/?36x36",
			"content" => "The Introduction to the Internet of Everything course provides an overview of the concepts and challenges of the transformational IoE economy. The course discusses the Internet and its evolution to the interconnection of people, processes, data, and things that forms the Internet of Everything.
 
The course introduces the concept of a network foundation connecting billions of things and trillions of gigabytes of data to enhance our decision making and interactions. Course modules describe how IOE drives the convergence between an organization’s operational technology (OT) and information technology (IT) systems, the business processes for evaluating a problem and implementing an IoE solution, and the machine-to-machine (M2M), machine-to-people (M2P), and people-to-people (P2P) connections in an IoE solution.",
			"timestamp" => "2015-02-08 07:00:00",
			"uid" => "PostID",
			"attachments" => array(
				array(
					"name" => "[File Name Goes Here]",
					"filename" => "Filename.pdf",
					"icon" => "lib/img/?36x36"
				),
			),
		),
		array(
			"id" => "REPLY-00000003",
			"username" => "Mark",
			"avatar" => "lib/img/?36x36",
			"content" => "The Introduction to the Internet of Everything course provides an overview of the concepts and challenges of the transformational IoE economy. The course discusses the Internet and its evolution to the interconnection of people, processes, data, and things that forms the Internet of Everything.
 
The course introduces the concept of a network foundation connecting billions of things and trillions of gigabytes of data to enhance our decision making and interactions. Course modules describe how IOE drives the convergence between an organization’s operational technology (OT) and information technology (IT) systems, the business processes for evaluating a problem and implementing an IoE solution, and the machine-to-machine (M2M), machine-to-people (M2P), and people-to-people (P2P) connections in an IoE solution.",
			"timestamp" => "2015-02-08 07:00:00",
			"uid" => "PostID",
			"attachments" => array(
				array(
					"name" => "[File Name Goes Here]",
					"filename" => "Filename.pdf",
					"icon" => "lib/img/?36x36"
				),
			),
		),
		array(
			"id" => "REPLY-00000004",
			"username" => "Andrea",
			"avatar" => "lib/img/?36x36",
			"content" => "The Introduction to the Internet of Everything course provides an overview of the concepts and challenges of the transformational IoE economy. The course discusses the Internet and its evolution to the interconnection of people, processes, data, and things that forms the Internet of Everything.
 
The course introduces the concept of a network foundation connecting billions of things and trillions of gigabytes of data to enhance our decision making and interactions. Course modules describe how IOE drives the convergence between an organization’s operational technology (OT) and information technology (IT) systems, the business processes for evaluating a problem and implementing an IoE solution, and the machine-to-machine (M2M), machine-to-people (M2P), and people-to-people (P2P) connections in an IoE solution.",
			"timestamp" => "2015-02-08 07:00:00",
			"uid" => "PostID",
			"attachments" => array(
				array(
					"name" => "[File Name Goes Here]",
					"filename" => "Filename.pdf",
					"icon" => "lib/img/?36x36"
				),
				array(
					"name" => "[File Name Goes Here]",
					"filename" => "Filename.jpg",
					"icon" => "lib/img/?36x36"
				),
				array(
					"name" => "[File Name Goes Here]",
					"filename" => "Filename.ppt",
					"icon" => "lib/img/?36x36"
				),
			),
			"gist" => array(
				array(
					"username" => "[username]",
					"project_name" => "[ProjectName]",
					"project_description" => "[GitHub Repository Description]",
					"icon" => "lib/img/?36x36",
					"gist_code" => "CONTENT GOES HERE",
				),
			),
		),
	),
	
	
	/* Space Database ****************************************************** */
	"projects" => array(
		"simple-keyboard-project" => array(
			"id" => "PROJECT-00000001",
			"pid" => "simple-keyboard-project",
			"name" => "Simple Keyboard Project",
			"description" => "This example shows how to use the tone() command to generate different pitches depending on which sensor is pressed.",
			"github_user" => "frwrdnet",
			"created_by" => "Victor",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00",
			"wiki_timestamp" => "2015-02-08 07:00:00",
			"wiki" => "",
		),
		"onepage-scroll" => array(
			"id" => "PROJECT-00000002",
			"pid" => "onepage-scroll",
			"name" => "Onepage Scroll",
			"description" => "Create an Apple-like one page scroller website (iPhone 5S website) with One Page Scroll plugin",
			"github_user" => "frwrdnet",
			"created_by" => "Victor",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00",
			"wiki_timestamp" => "2015-02-08 07:00:00",
			"wiki" => "",
		),
		"php-login-one-file" => array(
			"id" => "PROJECT-00000003",
			"pid" => "php-login-one-file",
			"name" => "PHP Login One File",
			"description" => "A simple, but secure PHP login script in one file and a flat-file SQLite database. No installation needed, ready to go in under 60seconds.",
			"github_user" => "frwrdnet",
			"created_by" => "Victor",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00",
			"wiki_timestamp" => "2015-02-08 07:00:00",
			"wiki" => "",
		),
		"frwrdnet.github.io" => array(
			"id" => "PROJECT-00000004",
			"pid" => "frwrdnet.github.io",
			"name" => "frwrd.net pages",
			"description" => "frwrd.net pages on github",
			"github_user" => "frwrdnet",
			"created_by" => "Victor",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00",
			"wiki_timestamp" => "2015-02-08 07:00:00",
			"wiki" => "",
		),
		"frwrd-test" => array(
			"id" => "PROJECT-00000005",
			"pid" => "frwrd-test",
			"name" => "frwrd test",
			"description" => "test repo",
			"github_user" => "frwrdnet",
			"created_by" => "Victor",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00",
			"wiki_timestamp" => "2015-02-08 07:00:00",
			"wiki" => "",
		),
		"FlappyBirdTemplate-Spritebuilder" => array(
			"id" => "PROJECT-00000006",
			"pid" => "FlappyBirdTemplate-Spritebuilder",
			"name" => "Flappy Bird Template - Sprite Builder Project",
			"description" => "",
			"github_user" => "frwrdnet",
			"created_by" => "Victor",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00",
			"wiki_timestamp" => "2015-02-08 07:00:00",
			"wiki" => "",
		),
		"discourse" => array(
			"id" => "PROJECT-00000007",
			"pid" => "discourse",
			"name" => "Discourse",
			"description" => "A platform for community discussion. Free, open, simple.",
			"github_user" => "frwrdnet",
			"created_by" => "Victor",
			"time_created" => "2015-02-08 07:00:00",
			"time_updated" => "2015-09-15 21:00:00",
			"wiki_timestamp" => "2015-02-08 07:00:00",
			"wiki" => "",
		),
	),
	
	
	/* Jobs Database ****************************************************** */
	"jobs" => array(
		array(
			"id" => "JOB-00000001",
			"title" => "Data Analyst",
			"company" => "Honeywell", 
			"description" => "Description of job goes here",
			"location" => "San Jose, CA",
			"date-added" => "2015-01-01 00:00:00",
			"date-expiration" => "2015-01-01 00:00:00"
		),
		array(
			"id" => "JOB-00000002",
			"title" => "Field Engineer",
			"company" => "Honeywell", 
			"description" => "Description of job goes here",
			"location" => "San Jose, CA",
			"date-added" => "2015-01-01 00:00:00",
			"date-expiration" => "2015-01-01 00:00:00"
		),
		array(
			"id" => "JOB-00000003",
			"title" => "Data Analyst",
			"company" => "Honeywell", 
			"description" => "Description of job goes here",
			"location" => "San Jose, CA",
			"date-added" => "2015-01-01 00:00:00",
			"date-expiration" => "2015-01-01 00:00:00"
		),
		array(
			"id" => "JOB-00000004",
			"title" => "Field Engineer",
			"company" => "Honeywell", 
			"description" => "Description of job goes here",
			"location" => "San Jose, CA",
			"date-added" => "2015-01-01 00:00:00",
			"date-expiration" => "2015-01-01 00:00:00"
		),
		array(
			"id" => "JOB-00000005",
			"title" => "Field Engineer",
			"company" => "Honeywell", 
			"description" => "Description of job goes here",
			"location" => "San Jose, CA",
			"date-added" => "2015-01-01 00:00:00",
			"date-expiration" => "2015-01-01 00:00:00"
		),
		array(
			"id" => "JOB-00000006",
			"title" => "Data Analyst",
			"company" => "Honeywell", 
			"description" => "Description of job goes here",
			"location" => "San Jose, CA",
			"date-added" => "2015-01-01 00:00:00",
			"date-expiration" => "2015-01-01 00:00:00"
		)
	),
	
	
	/* Conversations Database ****************************************************** */
	"conversations" => array(
		array(
			"thread" => "[Community Thread]",
			"user" => "James",
			"comment" => "I don't think we can attach the Arduino MP to the relay, it'll blow it probably.",
			"timestamp" => "2015-03-01 00:00:00"
		),
		array(
			"thread" => "[Community Thread]",
			"user" => "Stella",
			"comment" => "I don't think we can attach the Arduino MP to the relay, it'll blow it probably.",
			"timestamp" => "2015-02-01 00:00:00"
		),
		array(
			"thread" => "[Community Thread]",
			"user" => "Phil",
			"comment" => "I don't think we can attach the Arduino MP to the relay, it'll blow it probably.",
			"timestamp" => "2015-01-01 00:00:00"
		),
		array(
			"thread" => "[Community Thread]",
			"user" => "Patricia",
			"comment" => "I don't think we can attach the Arduino MP to the relay, it'll blow it probably.",
			"timestamp" => "2015-01-01 00:00:00"
		),
		array(
			"thread" => "[Community Thread]",
			"user" => "Ryan",
			"comment" => "I don't think we can attach the Arduino MP to the relay, it'll blow it probably.",
			"timestamp" => "2015-01-01 00:00:00"
		)
	),
	
	/* Notifications Database ****************************************************** */
	"alerts" => array(
		array(
			"type" => "warning",
			"title" => "Hackathon coming this Monday",
			"timestamp" => "December 12, 2015"
		),
		array(
			"type" => "danger",
			"title" => "Assessment coming this Friday",
			"timestamp" => "December 15, 2015"
		)
	)
);

$lipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque ligula eros, at auctor mi mollis a. Vivamus ut ornare orci. Donec non mollis eros. Aliquam fringilla consequat ante, sed condimentum ipsum tristique at. Integer vel turpis risus. Donec tempus porta tempor. Suspendisse et aliquam elit. Sed id pellentesque tortor, et scelerisque elit. Vestibulum odio urna, sagittis eu dignissim in, rhoncus ut ex. Cras in sodales lectus. Donec convallis vestibulum blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent tristique, erat at fringilla auctor, orci velit placerat turpis, condimentum lacinia justo nibh a purus. Suspendisse et sem eu turpis feugiat faucibus eu nec augue.

Aliquam erat volutpat. Sed condimentum pellentesque mi, et volutpat lorem lacinia rutrum. Donec ullamcorper, nisl quis semper mollis, risus leo semper velit, id tempus sapien diam sed massa. Praesent vehicula mauris et turpis ultricies, ultrices placerat nunc pulvinar. Donec sed commodo dolor. Fusce tincidunt ultrices eros id rutrum. Vivamus bibendum velit vitae nulla semper, non pretium tellus congue. Nunc dictum nulla ut nisl facilisis, lacinia tempor felis lobortis. Aenean interdum in leo nec posuere. Pellentesque at viverra nulla.

Nullam dolor odio, mollis ut nunc ac, vulputate tristique orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Ut condimentum in lectus sit amet ultrices. Nam tincidunt nulla vitae felis euismod, vitae tempus nisl lacinia. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent neque purus, iaculis eget mi eget, ultricies ornare sem. Duis eget risus arcu.

Sed consectetur nulla ut libero semper, quis eleifend elit viverra. Sed dapibus sagittis lorem pharetra hendrerit. Ut euismod, massa sit amet fermentum venenatis, justo lorem placerat risus, in suscipit turpis orci a velit. Sed hendrerit augue nec tincidunt auctor. Nam sed tempor dolor, ut porttitor nisl. Proin libero nisl, vehicula ut eros non, scelerisque faucibus lectus. Suspendisse potenti. Pellentesque viverra, mauris vel eleifend egestas, nunc leo malesuada felis, ac gravida risus nunc gravida odio. Nam iaculis dui urna, et pharetra eros porttitor et. Donec mollis lorem et elementum tincidunt.

Pellentesque feugiat turpis id leo convallis, in faucibus eros aliquet. In hac habitasse platea dictumst. Vivamus efficitur ante et tortor tempor pulvinar. Phasellus tortor est, fermentum sit amet sodales quis, blandit sed lectus. Integer pretium lacus quis mi condimentum congue. Proin ut justo ut mauris consequat molestie. Donec rhoncus justo ac ultricies lobortis. Praesent malesuada egestas mauris, ut placerat lacus ullamcorper ac. Etiam quis ornare nisl. In ullamcorper tincidunt gravida. Maecenas vehicula ante felis, eu ultrices sapien interdum eget. Morbi vitae commodo metus, nec congue lacus. Donec semper enim vel ante rutrum efficitur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed feugiat gravida mattis.";

?>