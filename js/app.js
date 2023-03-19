// module.exports ={
//     printavtar:function(){
//         console.log("avtar");
        
//     }
// };

// function printavtar(){

//     console.log("avtar: PG-13");
// }
// function printchappie(){
//     console.log("chappie:R");
// }
// module.exports.avtar =printavtar;
// module.exports.chappie=printchappie;

// can give adress 
// require('./emily');
// require('./bucky');0

// creates new text file
//  var  fs =require('fs');
//  fs.writeFileSync("corn.txt","corn is good ,corn is life");

//  read file
//  console.log (fs.readFileSync("corn.txt").toString());

// how to get different path 
//  var path=require('path');
//  var websitehome = "~/Srushti/web development/dbms project/medion/index.html";
//  var websiteabout="~/Srushti/web development/dbms project/medion/about.html";
//  var  websitecontact="~/Srushti/web development/dbms project/medion/contact.html";
//  var websitebuy="~/Srushti/web development/dbms project/medion/buy.html";

//  console.log(path.normalize(websitehome));
//  console.log(path.dirname(websiteabout));
//  console.log(path.basename(websiteabout));
//  console.log(path.extname(websiteabout));

// setInterval(function() {
// console.log("beef");

// },2000);

// gives path
// console.log(__dirname);
// console.log(__filename);

// var http = require('http');
// var fs=require('fs');

// function send404Response(response){
//     response.writeHead(404,{"Content-Type":"text/plain"});
//     response.write("Error 404:page not found");
//     response.end();

// }


// function onRequest(request,response){
//     if(request.method=='POST'&& request.url=='/'){
//         response.writeHead(200,{"context-type":"text/plain"});
//         fs.createReadStream("./index.html").pipe(response);
//     }
//     else{
//         send404Response(response);
//     }
//     // console.log("a user made a request"+ request.url);
//     // response.writeHead(200,{"context-type":"text/plain"});
//     // response.write("here is some data");
// // response.end();
// }
// http.createServer(onRequest).listen(5501);
// console.log("server is now running...")


// var connect = require( 'connect');
// var http = require('http');
// var app2=connect();
// app2.use;
// var  app2=connect();
// function doFirst(request ,response,next)
// {
//     console.log("harry");
//     next();
// }
// function doSecond(request ,response,next)
// {
//     console.log("harry1");
//     next();
// }
// app2.use(doFirst);
// app2.use(doSecond);
// http.createServer(app2).listen(5502);
// console.log("server is running");

var mysql = require('mysql')
var con= mysql.createConnection(
host="localhost",
user="root",
password="srush123",

)