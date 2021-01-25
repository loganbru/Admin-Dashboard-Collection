/*! components-toasts.js | Bulkit | CSS Ninja */

/* ==========================================================================
Izitoasts init file
========================================================================== */

$(document).ready(function ($) {

    "use strict";

    $('#top-left-toast').on("click", function () {
        iziToast.show({
            title: 'Hello,',
            message: 'Iam a very simple Toast !',
            position: 'topLeft',
        });
    })

    $('#top-center-toast').on("click", function () {
        iziToast.show({
            title: 'Hello,',
            message: 'Iam a very simple Toast !',
            position: 'topCenter',
        });
    })

    $('#top-right-toast').on("click", function () {
        iziToast.show({
            title: 'Hello,',
            message: 'Iam a very simple Toast !',
            position: 'topRight',
        });
    })

    $('#center-toast').on("click", function () {
        iziToast.show({
            title: 'Hello,',
            message: 'Iam a very simple Toast !',
            position: 'center',
        });
    })

    $('#bottom-left-toast').on("click", function () {
        iziToast.show({
            title: 'Hello,',
            message: 'Iam a very simple Toast !',
            position: 'bottomLeft',
        });
    })

    $('#bottom-center-toast').on("click", function () {
        iziToast.show({
            title: 'Hello,',
            message: 'Iam a very simple Toast !',
            position: 'bottomCenter',
        });
    })

    $('#bottom-right-toast').on("click", function () {
        iziToast.show({
            title: 'Hello,',
            message: 'Iam a very simple Toast !',
            position: 'bottomRight',
            zindex: 99999,
        });
    })

    $('#info-toast').on("click", function () {
        iziToast.show({
            class: 'info-toast',
            icon: 'sl sl-icon-info',
            title: 'Hello,',
            message: 'This is an info notification !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#039BE5',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'fadeInDown',
            close: false,
            zindex: 99999,
        });
    })

    $('#success-toast').on("click", function () {
        iziToast.show({
            class: 'success-toast',
            icon: 'sl sl-icon-check',
            title: 'Hello,',
            message: 'This is a success notification !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#00b289',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'fadeInDown',
            close: false,
            zindex: 99999,
        });
    })

    $('#warning-toast').on("click", function () {
        iziToast.show({
            class: 'warning-toast',
            icon: 'sl sl-icon-lock',
            title: 'Hello,',
            message: 'This is a warning notification !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#eda514',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'fadeInDown',
            close: false,
            zindex: 99999,
        });
    })

    $('#danger-toast').on("click", function () {
        iziToast.show({
            class: 'danger-toast',
            icon: 'sl sl-icon-close',
            title: 'Hello,',
            message: 'This is a danger notification !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#FF7273',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'fadeInDown',
            close: false,
            zindex: 99999,
        });
    })

    $('#fade-toast').on("click", function () {
        iziToast.show({
            icon: 'sl sl-icon-rocket',
            title: 'Hello,',
            message: 'This is an animated Toast !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#7F00FF',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'fadeIn',
            transitionOut: 'fadeOut',
            close: false,
            zindex: 99999,
        });
    })

    $('#fadeUp-toast').on("click", function () {
        iziToast.show({
            icon: 'sl sl-icon-rocket',
            title: 'Hello,',
            message: 'This is an animated Toast !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#7F00FF',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'fadeInUp',
            transitionOut: 'fadeOutUp',
            close: false,
            zindex: 99999,
        });
    })

    $('#fadeDown-toast').on("click", function () {
        iziToast.show({
            icon: 'sl sl-icon-rocket',
            title: 'Hello,',
            message: 'This is an animated Toast !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#7F00FF',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'fadeInDown',
            transitionOut: 'fadeOutDown',
            close: false,
            zindex: 99999,
        });
    })

    $('#fadeLeft-toast').on("click", function () {
        iziToast.show({
            icon: 'sl sl-icon-rocket',
            title: 'Hello,',
            message: 'This is an animated Toast !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#7F00FF',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'fadeInLeft',
            transitionOut: 'fadeOutLeft',
            close: false,
            zindex: 99999,
        });
    })

    $('#fadeRight-toast').on("click", function () {
        iziToast.show({
            icon: 'sl sl-icon-rocket',
            title: 'Hello,',
            message: 'This is an animated Toast !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#7F00FF',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'fadeInRight',
            transitionOut: 'fadeOutRight',
            close: false,
            zindex: 99999,
        });
    })

    $('#bounceUp-toast').on("click", function () {
        iziToast.show({
            icon: 'sl sl-icon-rocket',
            title: 'Hello,',
            message: 'This is an animated Toast !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#7F00FF',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'bounceInUp',
            transitionOut: 'bounceOutUp',
            close: false,
            zindex: 99999,
        });
    })

    $('#bounceDown-toast').on("click", function () {
        iziToast.show({
            icon: 'sl sl-icon-rocket',
            title: 'Hello,',
            message: 'This is an animated Toast !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#7F00FF',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'bounceInDown',
            transitionOut: 'bounceOutDown',
            close: false,
            zindex: 99999,
        });
    })

    $('#bounceLeft-toast').on("click", function () {
        iziToast.show({
            icon: 'sl sl-icon-rocket',
            title: 'Hello,',
            message: 'This is an animated Toast !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#7F00FF',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'bounceInLeft',
            transitionOut: 'bounceOutLeft',
            close: false,
            zindex: 99999,
        });
    })

    $('#bounceRight-toast').on("click", function () {
        iziToast.show({
            icon: 'sl sl-icon-rocket',
            title: 'Hello,',
            message: 'This is an animated Toast !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#7F00FF',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'bounceInRight',
            transitionOut: 'bounceOutRight',
            close: false,
            zindex: 99999,
        });
    })

    $('#flip-toast').on("click", function () {
        iziToast.show({
            icon: 'sl sl-icon-rocket',
            title: 'Hello,',
            message: 'This is an animated Toast !',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#7F00FF',
            progressBarColor: '#444F60',
            position: 'topRight',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            close: false,
            zindex: 99999,
        });
    })

    $('#question-toast').on("click", function () {
        iziToast.show({
            timeout: 10000,
            close: false,
            overlay: true,
            toastOnce: true,
            id: 'question',
            zindex: 999,
            title: 'Hey,',
            message: 'Are you sure about that?',
            titleColor: '#fff',
            messageColor: '#fff',
            iconColor: "#fff",
            backgroundColor: '#7F00FF',
            progressBarColor: '#444F60',
            position: 'center',
            buttons: [
                ['<button class="button btn-align is-small light-btn btn-outlined"><b class="light-text">YES</b></button>', function (instance, toast) {

                    instance.hide(toast, { transitionOut: 'fadeOut' }, 'button');

                    iziToast.show({
                        class: 'success-toast',
                        title: '',
                        message: 'Successfully saved modifications !',
                        titleColor: '#fff',
                        messageColor: '#fff',
                        backgroundColor: '#00b289',
                        progressBarColor: '#444F60',
                        position: 'center',
                        transitionIn: 'fadeInDown',
                        close: false,
                        zindex: 99999,
                        timeout: 1500,
                        pauseOnHover: false,
                    });

                }, true],
                ['<button class="button btn-align is-small light-btn btn-outlined"><b class="light-text">NO</b></button>', function (instance, toast) {

                    instance.hide(toast, { transitionOut: 'fadeOut' }, 'button');

                }]
            ],
            onClosing: function (instance, toast, closedBy) {
                // console.info('Closing | closedBy: ' + closedBy);
            },
            onClosed: function (instance, toast, closedBy) {
                console.info('Closed | closedBy: ' + closedBy);
            }
        });
    })

    $('#balloon-toast').on("click", function () {
        iziToast.show({
            id: 'show',
            title: 'Hey',
            icon: 'icon-drafts',
            class: 'custom1',
            titleColor: '#fff',
            theme: 'dark',
            progressBarColor: '#4FC1EA',
            message: 'This is a Balloon example with buttons',
            position: 'center',
            image: 'assets/images/avatars/funny1.svg',
            balloon: true,
            buttons: [
                ['<button>Photo</button>', function (instance, toast) {

                    // instance.hide({ transitionOut: 'fadeOutUp' }, toast);

                    iziToast.show({
                        theme: 'dark',
                        icon: 'fa fa-photo',
                        title: 'OK',
                        message: 'Callback Photo!',
                        position: 'bottomCenter',
                        // iconText: 'star',
                    });

                }, true],
                ['<button>Video</button>', function (instance, toast) {

                    // instance.hide({ transitionOut: 'fadeOutUp' }, toast);

                    iziToast.show({
                        theme: 'dark',
                        icon: 'fa fa-video-camera',
                        title: 'OK',
                        message: 'Callback Video!',
                        position: 'bottomCenter',
                        // iconText: 'star',
                    });

                }],
                ['<button>Text</button>', function (instance, toast) {

                    // instance.hide({ transitionOut: 'fadeOutUp' }, toast);

                    iziToast.show({
                        theme: 'dark',
                        icon: 'fa fa-pencil',
                        title: 'OK',
                        message: 'Callback Text!',
                        position: 'bottomCenter',
                        // iconText: 'star',
                    });

                }]
            ]
        });
    })

    $('#custom-toast').on("click", function () {
        iziToast.show({
            theme: 'dark',
            icon: 'fa fa-envelope',
            title: 'Helen Miller',
            message: 'Sent you <b>3</b> new messages',
            position: 'topCenter',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            progressBarColor: '#4FC1EA',
            image: 'assets/images/avatars/funny2.svg',
            imageWidth: 70,
            layout: 2,
            onClosing: function () {
                console.info('onClosing');
            },
            onClosed: function (instance, toast, closedBy) {
                console.info('Closed | closedBy: ' + closedBy);
            },
            iconColor: '#fff'
        });
    })

})

