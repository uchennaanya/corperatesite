/*function validateForm(){	
	
	let fname = document.forms["myForm"]["fname"].value;
	let sname = document.forms["myForm"]["sname"].value;
	
	if (fname == "" ) {
		alert("Fields 1 required");
		return 0;
	} else if (sname == "") {
		alert("Fields 2 required");
		return 0;
	} else {
		alert("Welcome dud");
		return 1;
	}
}
*/
//		var a = "global a";
//		var b = "global b";
//		function x() {
//			console.log("x(): global a" + a);
//			console.log("x(): global b" + b);
//			let a = 1;
//		}
//		window.moveTo(50,100);
//			let numOfArr = +prompt("Specify no. of Element");
			//console.log(typeof numOfArr)
//			let counter = 1;
//			let arr = [];
//			for (i=0; i< numOfArr; i++) {
//				
//				let arrElement = prompt("Item no. "+ counter++);
//				console.log(arrElement);    
//					arr[i] = arrElement;
//					console.log(arr.length);		
//			}
//			console.log(arr.length);
//			
//			let arrLen = arr.length;
//			
//			for (k=0; k < arrLen; k++) {
//				let answer = arr[k];
//				document.write(answer.toString()+',');
//			}
//			
			// carousel
			
//			var myIndex = 0;
//			carousel();
//
//			function carousel() {
//				
//				var i;
//				var x = document.getElementsByClassName("mySlides");
//				for (i = 0; i < x.length; i++) {
//					x[i].style.display = "none";
//				}
//				myIndex++;
//				if (myIndex > x.length) {myIndex = 1}
//				x[myIndex-1].style.display = "block";
//				setTimeout(carousel, 3000);
//			} 

//function myMove() {
//    var elem = document.getElementById("animate");
//    var pos = 0;
//    var id = setInterval(frame, 5);
//    function frame() {
//        if (pos == 350) {
//            clearInterval(id);
//        } else {
//            pos++;
//            elem.style.top = pos + 'px';
//            elem.style.left = pos + 'px';
//        }
//    }
//}

$(document).ready(function(){
	$(window).scroll(function(){
	if ($(window).scrollTop() >= 60) {
       $('#myHeader').addClass('sticky');
       $('#scroll').addClass('scrollTop');
    }
    else {
       $('#myHeader').removeClass('sticky');
       $('#scroll').removeClass('scrollTop');
    }
});
})
//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 