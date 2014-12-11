// var name = 'Rajdeep Barman';
// var role = 'Web Developer';


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
  "welcomeMessage": "Hello, World! Nice to meet you. I am a pro at web dev",
  "skills": ["developing websites", "software dev", "communication", "analytics"],
  "company": "LRR Tech"
};



// var work = {
//   "position": "Web development engineering Intern",
//   "employer": "LRR Technologies",
//   "years": "May 2014 - Jan 2015",
//   "city": "Hyderabad",
//   "desc": "Full stack development - HTML, CSS, Javascript, PHP"
// };
// work.position = 'Web development engineering Intern';
// work.employer = 'LRR Technologies';
// work.years = 'May 2014 - Jan 2015';
// work.city = 'Hyderabad';
// work.desc = 'Full stack development - HTML, CSS, Javascript, PHP';

// var HTMLworkEmployer = HTMLworkEmployer.replace("%data%", work.employer);
// var HTMLworkTitle = HTMLworkTitle.replace("%data%", work.position);
// var JobAt = HTMLworkEmployer + HTMLworkTitle;
// var HTMLworkDates = HTMLworkDates.replace("%data%", work.years);
// var HTMLworkLocation = HTMLworkLocation.replace("%data%", work.city);
// var HTMLworkDescription = HTMLworkDescription.replace("%data%", work.desc);

// var education = {};
// education['college'] = 'National Institute of Technology, Silchar';
// education['degree'] = 'Bachelor of Technology';
// education['years'] = '2008-2012';
// education['city'] = 'Silchar';
// education['major'] = 'Civil Engineering';

// var formattedHTMLschoolName = HTMLschoolName.replace("%data%", education['college']);
// var formattedHTMLschoolDegree = HTMLschoolDegree.replace("%data%", education['degree']);
// var edu = formattedHTMLschoolName + formattedHTMLschoolDegree;
// var formattedHTMLschoolDates = HTMLschoolDates.replace("%data%", education['years']);
// var formattedHTMLschoolLocation = HTMLschoolLocation.replace("%data%", education['city']);
// var formattedHTMLschoolMajor = HTMLschoolMajor.replace("%data%", education['major']);

// $('#workExperience').append(HTMLworkStart);
// $('.work-entry').append(JobAt);
// $('.work-entry').append(HTMLworkDates);
// $('.work-entry').append(HTMLworkLocation);
// $('.work-entry').append(HTMLworkDescription);
//
// $('#education').append(HTMLschoolStart);
// $('.education-entry').append(edu);
// $('.education-entry').append(formattedHTMLschoolDates);
// $('.education-entry').append(formattedHTMLschoolLocation);
// $('.education-entry').append(formattedHTMLschoolMajor);

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
    "url": ""
  },
  {
    "name": "Birla Public School",
    "location": "Pilani, Rajasthan",
    "degree": "CBSE",
    "majors": ["PCM"],
    "dates": "2006 - 2008",
    "url": ""
  },
  {
    "name": "National Institute of Technology",
    "location": "Silchar, Assam",
    "degree": "Bachelor of Technology",
    "majors": ["Civil Engineering"],
    "dates": "2008 - 2012",
    "url": ""
  }],
  "onlineCourses": [
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
    "employer":"Flareum Technologies",
    "title":"Executive Engineer - Civil",
    "location":"Valsad, Gujarat",
    "dates":"August 2012 - March 2013",
    "description":""
  },
  {
    "employer": "Criticalys Info Management",
    "title": "Web Development Engineer - Intern",
    "location":"Hyderabad, Telangana",
    "dates":"February 2014 - April 2014",
    "description":""
  },
  {
    "employer":"LRR Technologies",
    "title":"Full Stack Web Development Engineer - Intern",
    "location":"Hyderabad, Telangana",
    "dates":"May 2014 - Jan 2015",
    "description":""
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
