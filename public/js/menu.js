$(document).ready(main);
function main(){
	var cont = 0;
  var subCnt = 0;
	$('.menu i').click(function(){;
		cont++;
		if(cont == 1){
			console.log(cont);
			$('nav').animate({left: '0'});
		}else{
			$('nav').animate({left: '-100%'});
			cont = 0;
		}
});
	$('.globalContainer').click(function(){
    $('nav').animate({left: '-100%'});
	});
	$('.logomenu').click(function(){
    $('nav').animate({left: '-100%'});
	});

};

var subCont = 0;
$('.subContLnk').click(function(){
  subCont++;
  console.log(subCont);
  document.getElementById("sub-nav").style.display = "flex";
  document.getElementById("sub-nav").style.background = "#dbedffb6";
  document.getElementById("sub-nav").style.width = "100%";
  if(subCont >= 2){
		document.getElementById("sub-nav").style.display = "none";
    subCont = 0;
  }
});

var currentSelector = 0;
var selectorTitl1 = document.getElementById('selectorTitl1');
var selectorTitl2 = document.getElementById('selectorTitl2');
var selectorTitl3 = document.getElementById('selectorTitl3');
var selectorTitl4 = document.getElementById('selectorTitl4');
var selectorTitl5 = document.getElementById('selectorTitl5');
var selectorTitl6 = document.getElementById('selectorTitl6');
var selectorTitl7 = document.getElementById('selectorTitl7');
var selectorTitl8 = document.getElementById('selectorTitl8');
var selectorTitl9 = document.getElementById('selectorTitl9');

$(document).ready(selectorQuery);
function selectorQuery(){
    function options(){
     /* currentSelector.style.borderRight = '1px solid #444343';
      currentSelector.style.borderBottom = 'none';
      currentSelector.style.borderLeft = '1px solid #444343';*/
    }
    function optionReturn(){
      /*selectorTitl1.style.borderBottom = '1px solid #444343';
      selectorTitl2.style.borderBottom = '1px solid #444343';
      selectorTitl3.style.borderBottom = '1px solid #444343';
      selectorTitl4.style.borderBottom = '1px solid #444343';
      selectorTitl5.style.borderBottom = '1px solid #444343';*/
    }

  $('#selectorTitl1').click(function(){
    currentSelector = selectorTitl1;
    /*window.location.href = "../secc/audio_pack.php#selItm1";*/
    optionReturn();
    options();
  });

  $('#selectorTitl2').click(function(){
    currentSelector = selectorTitl2;
    /*window.location.href = "../secc/audio_pack.php#selItm2";*/
    optionReturn();
    options();
  });
  $('#selectorTitl3').click(function(){
    currentSelector = selectorTitl3;
    /*window.location.href = "../secc/audio_pack.php#selItm3";*/
    optionReturn();
    options();
  });
  $('#selectorTitl4').click(function(){
    currentSelector = selectorTitl4;
    /*window.location.href = "../secc/audio_pack.php#selItm4";*/
    optionReturn();
    options();
  });
  $('#selectorTitl5').click(function(){
    currentSelector = selectorTitl5;
    /*window.location.href = "../secc/audio_pack.php#selItm5";*/
    optionReturn();
    options();
  });
}



$(document).ready(noEditable);
function noEditable(){
  currentNoEdit = 0;
  function options(){
    currentSelector.style.borderRight = '1px solid #444343';
    currentSelector.style.borderBottom = 'none';
    currentSelector.style.borderLeft = '1px solid #444343';
  }
  function optionReturn(){
    selNoEdit1.style.borderBottom = '1px solid #444343';
    selNoEdit2.style.borderBottom = '1px solid #444343';
    selNoEdit3.style.borderBottom = '1px solid #444343';
    selNoEdit4.style.borderBottom = '1px solid #444343';
    selNoEdit5.style.borderBottom = '1px solid #444343';
    selNoEdit6.style.borderBottom = '1px solid #444343';
    selNoEdit7.style.borderBottom = '1px solid #444343';
  }
$('#selNoEdit1').click(function(){
  currentNoEdit = selectorTitl1;
  /*window.location.href = "../secc/audio_pack.php#selItm1";*/
  optionReturn();
  options();
});
$('#selNoEdit2').click(function(){
  currentNoEdit = selNoEdit2;
  /*window.location.href = "../secc/audio_pack.php#selItm2";*/
  optionReturn();
  options();
});
$('#selNoEdit3').click(function(){
  currentNoEdit = selNoEdit3;
  /*window.location.href = "../secc/audio_pack.php#selItm3";*/
  optionReturn();
  options();
});
$('#selNoEdit4').click(function(){
  currentNoEdit = selNoEdit4;
  /*window.location.href = "../secc/audio_pack.php#selItm4";*/
  optionReturn();
  options();
});
$('#selNoEdit5').click(function(){
  currentNoEdit = selNoEdit5;
  /*window.location.href = "../secc/audio_pack.php#selItm5";*/
  optionReturn();
  options();
});
$('#selNoEdit6').click(function(){
  currentNoEdit = selNoEdit6;
  /*window.location.href = "../secc/audio_pack.php#selItm5";*/
  optionReturn();
  options();
});
$('#selNoEdit7').click(function(){
  currentNoEdit = selNoEdit7;
  /*window.location.href = "../secc/audio_pack.php#selItm5";*/
  optionReturn();
  options();
});

}
//HIDDE BAR
var prevScroll=window.pageYOffset;
window.onscroll=function(){
var currentScroll=window.pageYOffset;
if(prevScroll > currentScroll){
	document.getElementById("navigator").style.top="0";
} else{
	document.getElementById("navigator").style.top="-100px";
}
prevScroll = currentScroll;
}
function showFloat(){
  document.getElementById("floatSecc").style.opacity= "1";
  document.getElementById("floatSecc").style.display= "block";
}
function hideFloat(){
  document.getElementById("floatSecc").style.display="none";
}

function showCircleA(){
  document.getElementById("sel_cont").style.display="flex";
}
function closeCircleA(){
  document.getElementById("sel_cont").style.display="none";
}
function showCircleB(){
  document.getElementById("circleB").style.display="flex";
}
function closeCircleB(){
  document.getElementById("circleB").style.display="none";
}

//ABOUTANIMATE
const scrollElements = document.querySelectorAll(".js-scroll");
const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;
  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};
const elementOutofView = (el) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop > (window.innerHeight || document.documentElement.clientHeight)
  );
};
const displayScrollElement = (element) => {
  element.classList.add("scrolled");
};
const hideScrollElement = (element) => {
  element.classList.remove("scrolled");
};
const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 1.25)) {
      displayScrollElement(el);
    } else if (elementOutofView(el)) {
      hideScrollElement(el)
    }
  })
}
window.addEventListener("scroll", () => { 
  handleScrollAnimation();
});

