/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Sweet Alert Js
 */


 
!function ($) {
    "use strict";

    var SweetAlert = function () {
    };

    //examples
    //examples
    SweetAlert.prototype.init = function () {

        //Basic
        $('#sa-basic').on('click', function () {
            Swal.fire('Any fool can use a computer')
        });

        //A title with a text under
        $('#sa-title').click(function () {
            Swal.fire(
                'The Internet?',
                'That thing is still around?',
                'question'
            )
        });

        //Success Message
        $('#sa-success').click(function () {
            Swal.fire(
                'Good job!',
                'You clicked the button!',
                'success'
              )
        });

        //Warning Message
        
        $('#sa-warning').click(function () {
            
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
              }).then((result) => {
                if (result.value) {
                  swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                  )
                } else if (
                  // Read more about handling dismissals
                  result.dismiss === Swal.DismissReason.cancel
                ) {
                  swal.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                  )
                }
              })
        });

        //Custom Position
        $('#sa-topright-success').click(function () {
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
              })
        });
        //Custom Animation
        $('#sa-custom-animation').click(function () {
            Swal.fire({
                title: 'Custom animation with Animate.css',
                animation: false,
                customClass: 'animated tada'
            })
        });
        
        //Parameter
        $('#sa-params').click(function () {

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '$success',
                cancelButtonColor: '$danger',
                confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                if (result.value) {
                  Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                  )
                }
              })
        });

        //Custom Image
        $('#sa-image').click(function () {
            Swal.fire({
                title: 'Metrica Brand',
                text: 'Modal with a custom image.',
                imageUrl: '../assets/images/logo-sm.png',
                imageHeight: 80,
                animation: false
            })            
        });

        

        //custom html alert
        $('#custom-html-alert').click(function () {
            Swal.fire({
                title: '<strong>HTML <u>example</u></strong>',
                type: 'info',
                html:
                  'You can use <b>bold text</b>, ' +
                  '<a href="//github.com">links</a> ' +
                  'and other HTML tags',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText:
                  '<i class="fa fa-thumbs-up"></i> Great!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText:
                  '<i class="fa fa-thumbs-down"></i>',
                cancelButtonAriaLabel: 'Thumbs down',
              })
        });

        //Custom width padding
        $('#custom-padding-width-alert').click(function () {
            Swal.fire({
                title: 'Custom width, padding, background.',
                width: 600,
                padding: 100,
                background: '#fff url(//subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/geometry.png)'
            })
        });

        //Auto Close
        $('#sa-auto-close').click(function () {
            let timerInterval
            Swal.fire({
            title: 'Auto close alert!',
            html: 'I will close in <strong></strong> seconds.',
            timer: 2000,
            onBeforeOpen: () => {
                Swal.showLoading()
                timerInterval = setInterval(() => {
                Swal.getContent().querySelector('strong')
                    .textContent = Swal.getTimerLeft()
                }, 100)
            },
            onClose: () => {
                clearInterval(timerInterval)
            }
            }).then((result) => {
            if (
                // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.timer
            ) {
                console.log('I was closed by the timer')
            }
            })
        });

        //Ajax
        $('#ajax-alert').click(function () {
            Swal.fire({
                title: 'Submit your Github username',
                input: 'text',
                inputAttributes: {
                  autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Look up',
                showLoaderOnConfirm: true,
                preConfirm: (login) => {
                  return fetch(`//api.github.com/users/${login}`)
                    .then(response => {
                      if (!response.ok) {
                        throw new Error(response.statusText)
                      }
                      return response.json()
                    })
                    .catch(error => {
                      Swal.showValidationMessage(
                        `Request failed: ${error}`
                      )
                    })
                },
                allowOutsideClick: () => !Swal.isLoading()
              }).then((result) => {
                if (result.value) {
                  Swal.fire({
                    title: `${result.value.login}'s avatar`,
                    imageUrl: result.value.avatar_url
                  })
                }
              })
        });

        //chaining modal alert
        $('#chaining-alert').click(function () {
            Swal.mixin({
                input: 'text',
                confirmButtonText: 'Next &rarr;',
                showCancelButton: true,
                progressSteps: ['1', '2', '3']
              }).queue([
                {
                  title: 'Question 1',
                  text: 'Chaining swal2 modals is easy'
                },
                'Question 2',
                'Question 3'
              ]).then((result) => {
                if (result.value) {
                  Swal.fire({
                    title: 'All done!',
                    html:
                      'Your answers: <pre><code>' +
                        JSON.stringify(result.value) +
                      '</code></pre>',
                    confirmButtonText: 'Lovely!'
                  })
                }
              })
        });

        //Danger
        $('#dynamic-alert').click(function () {
            const ipAPI = 'https://api.ipify.org?format=json'
            Swal.queue([{
                title: 'Your public IP',
                confirmButtonText: 'Show my public IP',
                text:
                  'Your public IP will be received ' +
                  'via AJAX request',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                  return fetch(ipAPI)
                    .then(response => response.json())
                    .then(data => Swal.insertQueueStep(data.ip))
                    .catch(() => {
                      Swal.insertQueueStep({
                        type: 'error',
                        title: 'Unable to get your public IP'
                      })
                    })
                }
              }])
        });


    },
        //init
        $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.SweetAlert.init()
    }(window.jQuery);