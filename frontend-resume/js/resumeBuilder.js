var bio = {
  "name": "Rajdeep Barman",
  "role": "Web Development Engineer",
  "contacts": {
    "mobile": "+91-9701078814",
    "email": "barman.rajdeep@gmail.com",
    "github": "barmanrajdeep",
    "twitter": "rajdeepbarman",
    "location": "Hyderabad",
    "page": "www.rajdeepbarman.com"
  },
  "bioPic": "images/mypic.jpg",
  "welcomeMessage": "Hello, World! I live and breathe coding on the web",
  "skills": ["developing websites", "code performance optimization", "communication", "mentoring & managing"],
  "company": "LRR Tech"
};

var education = {
  "schools": [
  {
    "name": "South Point School",
    "location": "Kurseong, West Bengal",
    "degree": "",
    "majors": [],
    "dates": "1994 - 1999",
    "url": ""
  },
  {
    "name": "St. Anthony's School",
    "location": "Giddhapahar, Kurseong, West Bengal",
    "degree": "ICSE",
    "majors": ["PCM"],
    "dates": "1999 - 2006",
    "url": "www.saskurseong.com/"
  },
  {
    "name": "Birla Public School",
    "location": "Pilani, Rajasthan",
    "degree": "CBSE",
    "majors": ["PCM"],
    "dates": "2006 - 2008",
    "url": "www.bpspilani.com/"
  },
  {
    "name": "National Institute of Technology",
    "location": "Silchar, Assam",
    "degree": "Bachelor of Technology",
    "majors": ["Civil Engineering"],
    "dates": "2008 - 2012",
    "url": "www.nits.ac.in/"
  }],
  "onlineCourses": [
  {
    "title": "Website Performance Optimization - The Critical Rendering Path",
    "school": "Udacity",
    "dates": "Nov 2014",
    "url": "www.udacity.com/course/ud884"
  },
  {
    "title": "JavaScript Basics - The Programming Language of the Web",
    "school": "Udacity",
    "dates": "September 2014",
    "url": "www.udacity.com/course/ud804"
  },
  {
    "title": "Object-Oriented JavaScript - Writing Reusable and Maintainable Code",
    "school": "Udacity",
    "dates": "October 2014",
    "url": "www.udacity.com/course/ud015"
  },
  {
    "title": "How to Use Git and GitHub - Version Control for Code",
    "school": "Udacity",
    "dates": "Oct 2014",
    "url": "www.udacity.com/course/ud775"
  },
  {
    "title": "Intro to AJAX - Making Asynchronous Requests with jQuery",
    "school": "Udacity",
    "dates": "Oct 2014",
    "url": "www.udacity.com/course/ud110"
  },
  {
    "title": "Intro to jQuery - Manipulating Websites with Ease",
    "school": "Udacity",
    "dates": "Oct 2014",
    "url": "www.udacity.com/course/ud245"
  },
  {
    "title": "Programming Foundations with Python - Learn Object-Oriented Programming",
    "school": "Udacity",
    "dates": "Nov 2014",
    "url": "www.udacity.com/course/ud036"
  },
  {
    "title": "Intro to Java Programming - Building Programs with Classes & Objects",
    "school": "Udacity",
    "dates": "Jan 2014",
    "url": "www.udacity.com/course/cs046"
  },
  {
    "title": "Building Dynamic Websites",
    "school": "Harvard Online",
    "dates": "September 2014",
    "url": "www.cs75.tv/2012/summer/"
  },
  {
    "title": "",
    "school": "",
    "dates": "",
    "url": ""
  },
  {
    "title": "",
    "school": "",
    "dates": "",
    "url": ""
  },
  {
    "title": "",
    "school": "",
    "dates": "",
    "url": ""
  },
  {
    "title": "",
    "school": "",
    "dates": "",
    "url": ""
  },
  {
    "title": "",
    "school": "",
    "dates": "",
    "url": ""
  },
  {
    "title": "",
    "school": "",
    "dates": "",
    "url": ""
  },
  {
    "title": "",
    "school": "",
    "dates": "",
    "url": ""
  },
  {
    "title": "",
    "school": "",
    "dates": "",
    "url": ""
  },
  {
    "title": "",
    "school": "",
    "dates": "",
    "url": ""
  }
  ]
};

var work = {
  "jobs": [
  {
    "employer":"LRR Technologies",
    "title":"Full Stack Web Development Engineer",
    "location":"Hyderabad, Telangana",
    "dates":"May 2014 - Jan 2015",
    "description":"Two client - Loyola College and University of Hyderabad - projects: Wordpress based websites. Front-end (Html, css and Javascript) and server side (PHP and MySQL) - links below. <a href='http://loyolaacademyugpg.ac.in' target='_blank' style='color:green'>Loyola College</a><a href='http://www.uohyd.ac.in/' target='_blank' style='color:green'>University of Hyderabad</a> <br>LRR Technologies' two flagship products: Fullhyderabad and 100pins - links below. <a href='http://www.fullhyderabad.com' target='_blank' style='color:green'>Fullhyderabad</a><a href='http://www.100pins.com' target='_blank' style='color:green'>100pins</a>"
  },
  {
    "employer": "Criticalys Info Management",
    "title": "Web Development Engineer",
    "location":"Hyderabad, Telangana",
    "dates":"February 2014 - April 2014",
    "description":"One project done"
  },
  {
    "employer":"Flareum Technologies",
    "title":"Executive Engineer",
    "location":"Valsad, Gujarat",
    "dates":"August 2012 - March 2013",
    "description":"Design"
  }
  ]
};


var projects = {
  "projects": [
  {
    "title": "",
    "dates": "",
    "description": "",
    "images": []
  }
  ]
};

var formattedName = HTMLheaderName.replace("%data%", bio.name);
var formattedRole = HTMLheaderRole.replace("%data%", bio.role);

$('#header').prepend(formattedRole);
$('#header').prepend(formattedName);

var formattedLocation = HTMLlocation.replace("%data%", bio.contacts.location);
var formattedHTMLblog = HTMLblog.replace("%data%", bio.contacts.page);
var formattedHTMLGitHub = HTMLgithub.replace("%data%", bio.contacts.github);
var formattedHTMLTwitter = HTMLtwitter.replace("%data%", bio.contacts.twitter);
var formattedHTMLEmail = HTMLemail.replace("%data%", bio.contacts.email);
var formattedHTMLMobile = HTMLmobile.replace("%data%", bio.contacts.mobile);
var formattedHTMLContactGeneric1 = HTMLcontactGeneric.replace("%contact%", "company");
var formattedHTMLContactGeneric = formattedHTMLContactGeneric1.replace("%data%", bio.company);
var formattedPic = HTMLbioPic.replace("%data%", bio.bioPic);
var formattedwelcomeMessage = HTMLWelcomeMsg.replace("%data%", bio.welcomeMessage);

$('#topContacts').prepend(formattedHTMLContactGeneric);
$('#topContacts').prepend(formattedLocation);
$('#topContacts').prepend(formattedHTMLblog);
$('#topContacts').prepend(formattedHTMLGitHub);
$('#topContacts').prepend(formattedHTMLTwitter);
$('#topContacts').prepend(formattedHTMLEmail);
$('#topContacts').prepend(formattedHTMLMobile);

$('#header').append(formattedPic);
$('#header').append(formattedwelcomeMessage);

if ( bio.skills.length != 0 ) {
  $('#header').append(HTMLskillsStart);
  var count = bio.skills.length;
  for (var i = 0; i < count; i++) {
    var formattedHTMLskills = HTMLskills.replace('%data%', bio.skills[i]);
    $('#skills').append(formattedHTMLskills);
  }
}

function displayWork(){
  for ( job in work.jobs ) {
    $("#workExperience").append(HTMLworkStart);
    var co = work.jobs[job].employer;
    var profile = work.jobs[job].title;
    var formattedHTMLworkEmployer = HTMLworkEmployer.replace("%data%", co);
    var formattedHTMLworkTitle = HTMLworkTitle.replace("%data%", profile );
    var workName = formattedHTMLworkEmployer + formattedHTMLworkTitle;

    var formattedHTMLworkDates = HTMLworkDates.replace("%data%", work.jobs[job].dates);
    var formattedHTMLworkLocation = HTMLworkLocation.replace("%data%", work.jobs[job].location);
    var formattedHTMLworkDescription = HTMLworkDescription.replace("%data%", work.jobs[job].description);


    $(".work-entry:last").append(workName);
    $(".work-entry:last").append(formattedHTMLworkDates);
    $(".work-entry:last").append(formattedHTMLworkLocation);
    $(".work-entry:last").append(formattedHTMLworkDescription);

  }
}
displayWork();
$(document).click(function(loc){
  
});
