(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach((e) => e.addEventListener(type, listener));
    } else {
      select(el, all).addEventListener(type, listener);
    }
  };

  if (select(".toggle-sidebar-btn")) {
    on("click", ".toggle-sidebar-btn", function (e) {
      select("body").classList.toggle("toggle-sidebar");
    });
  }
})();

// jquery 
$(document).ready(function () {

  // Function to get today's date
  function getTodayDate() {
    let today = new Date();
    let formattedDate = today.toLocaleDateString("en-IN", {
      day: 'numeric',
      month: 'long',
      year: 'numeric'
    });
    return formattedDate;
  }

  // Set today's date in the appropriate element
  $(".Dashboard-Attendance-title small").text(getTodayDate());

  // Function to get current time
  function getCurrentTime() {
    let today = new Date();
    let formattedTime = today.toLocaleTimeString("en-IN", {
      hour: '2-digit',
      minute: '2-digit',
      second: '2-digit'
    });
    return formattedTime;
  }

  // Update the current time every second
  setInterval(function () {
    $(".punch-hours span").text(getCurrentTime());
  }, 1000);

});



