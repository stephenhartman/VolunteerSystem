
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$('button.delete-button').click(function() {
    var id = $(this).attr("data-id");
    deleteMember(id);
  });

  function deleteMember(id) {
    swal({
      title: "Are you sure?",
      text: "Are you sure that you want to delete this record?",
      type: "warning",
      showCancelButton: true,
      closeOnConfirm: false,
      confirmButtonText: "Yes",
      confirmButtonColor: "#ec6c62"
    }, function() {
      $.ajax({
        url: "/members/" + id,
        type: "DELETE"
      })
      .done(function(data) {
        swal("Deleted!", "Your record was successfully deleted!", "success");
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
    });
  }
