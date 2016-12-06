var accordionItems = new Array();// global array til að halda utanum accordionItem divin

function init() { //setur upp accordionið

      var divs = document.getElementsByTagName( 'div' ); // setur divs í accordionItems array með því að nota document.getElementsByTagName() til að fá lista yfir öll div á pageinu
      for ( var i = 0; i < divs.length; i++ ) { //for loopan fer í gegnum divin 
        if ( divs[i].className == 'accordionItem' ) accordionItems.push( divs[i] ); // pushar öll div sem hafa class accordionItem í accordionItems fylkið
      }

      for ( var i = 0; i < accordionItems.length; i++ ) { // for loopan fer í gegnum fylkið 
        var h2 = getFirstChildWithTagName( accordionItems[i], 'H2' ); //til að finna h2 element er notað getFirstChildWithTagName()
        h2.onclick = toggleItem; // setur onclick event handler toggleItem() á h2 elementin í öllum divum
      }

      for ( var i = 1; i < accordionItems.length; i++ ) { // loopar í gegnum öll divin nema fyrsta
        accordionItems[i].className = 'accordionItem gghide'; // setur öll clössin í 'accordionItem hide'.þetta felur öll nema fyrsta div tagið
      }
    }

function toggleItem() {                                                 //Býr til nýtt function sem heitir toggleItem
    var itemClass = this.parentNode.className;                          //Býr til breytu sem nær í classan á foreldranum sínum
    if (itemClass == 'accordionItem gghide') {                            //Býr til if setningu sem spyr hvort classin hjá foreldra sínum er jafn og "accordionItem hide"
        for (var i = 0; i < accordionItems.length; i++) {               //Býr til for lykju sem er jafn fjölda staka í accordionItems arraynum
            accordionItems[i].className = 'accordionItem gghide';         //Breytir classanum á öllum div tögum með class="accordionItem" í class="accordionItem hide"
        }                                                               //Lokar for lyjkunni
        this.parentNode.className = 'accordionItem';                    //Breytir foreldra tagsins sem klikkað var á í class="accordionItem"
    }                                                                   //Lokar if setningunni
}               

function getFirstChildWithTagName( element, tagName ) { // hjálpari sem er notað með init()
      for ( var i = 0; i < element.childNodes.length; i++ ) { //loopar í gegnum child nodes
        if ( element.childNodes[i].nodeName == tagName ) return element.childNodes[i]; //skilar gefið element með gefið tag name                
      }
    }

window.onload = init;// loadar upp init functioninu þegar page-ið loadast

