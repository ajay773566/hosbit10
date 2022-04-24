"use strict";

jQuery(window).on("load", function() {

    // Search domain button, linked to Name.com

    jQuery("#search-btn").on("click", function(e){

        e.preventDefault();

        var domain=jQuery("#domain-text").val();

        var checkdomain=ValidURL(domain);

        if(checkdomain){

            window.location.href = "https://www.name.com/domain/search-4-4/?keyword="+domain;

        }else{

            alert("Please enter a valid domain.");

        }

        return false;

    });

   

    // URL Validation

    function ValidURL(str) {

      var pattern = new RegExp('((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|'+ // domain name

  '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address

  '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path

  '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string

  '(\\#[-a-z\\d_]*)?$','i'); // fragment locator

      if(!pattern.test(str)) {

        return false;

      } else {

        return true;

      }

    }

});