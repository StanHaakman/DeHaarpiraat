let accesstokenHaarpiraat = '6258864564.1677ed0.58537fe7721f487286b7f72483ab7113';
let useridhaarpiraat = '6258864564';
$(document).ready(function() {

    let btnInstafeedLoad = document.getElementById("btn-instafeed-load");

    let instafeed = new Instafeed({
        get: 'user',
        userId: useridhaarpiraat, // de userid of the account
        target: "instafeed", // where the data will be sent
        limit: 8,  // the number of pictures that we get
        /*
        the size of the picture
        */
        resolution: 'low_resolution',
        width: '100%' ,
        accessToken: accesstokenHaarpiraat, // the code that you need to get access of your account
        /*
        sorting the post
        */
        sortBy: 'most-recent',

        // for displaying the full username
        filter: function(image) {
            if (image.user && image.user.full_name && image.user.full_name.length > 0) {
                image.full_name_with_fallback = image.user.full_name;
            } else {
                image.full_name_with_fallback = image.user.username;
            }
            return true;
        },
        //
        // filter: function(image) {
        //     if (image.type == 'image') {
        //         image.template = '<img src="' + image.images.standard_resolution.url + '" />';
        //     } else {
        //         image.template = '<video width="100%" controls loop><source src="' + image.videos.standard_resolution.url + '" type="video/mp4"/></video>';
        //     }
        //     return true;
        // },
        template: '<header>{{model.template}}</header><footer><a href="http://instagram.com/{{model.user.username}}">@{{model.user.username}}</a><br>{{caption}}</footer>',


        /*
        * {{model.full_name_with_fallback}}  displaying your full name of your account
        * {{caption}} give you the texts of the picture
        * {{image}} give you the url of the picture
        * {{link}} give you the url that  direct to your Instagtam account
        * {{likes}} give the numbers of likes
        * {{comments}} give the number of comments
        * {{model.tags}} give that tags that you added
        * */
        template:'<div class="insta__view">' +
        '<div class="insta__view--image">' +
        '<a href="{{link}}" title="{{caption}}" target="_blank">' +
        '<img src="{{image}}" width="{{width}}" alt="{{caption}}" class="img-fluid"/>' +
        '</a>' +
        '</div>' +
        '<div class="insta__caption">' +
        '<br> <strong><span class="likes"><i class="icon ion-md-heart"></i>{{likes}}</span> <span class="comments"><ion-icon name="chatbubbles"></ion-icon> {{comments}}</span></strong>' +
        '<p class="insta__caption--text">{{caption}}</p>' +
        ' </div>' +
        '</div>',
        // every time we load more, run this function
        after: function() {
            // disable button if no more results to load
            if (!this.hasNext()) {
                btnInstafeedLoad.setAttribute('disabled', 'disabled');
                btnInstafeedLoad.style.display = "none";
            }
        },
    });



    // de load more button die meer foto's laten zien
    btnInstafeedLoad.addEventListener("click", function() {
        instafeed.next()
    });

    //laat de gebruiksnaam zien.
    let instafeedProfile = new Instafeed({

        get: 'user',
        userId: useridhaarpiraat, // de userid of the account
        target: "instaProfile", // where the data will be sent
        resolution: 'low_resolution',   // the size of the picture
        accessToken: accesstokenHaarpiraat, // the code that you need to get access of your account
        limit:1,
        template:'<div class="insta_profile">' +
        '<h2>' +
        '<a href="http://instagram.com/{{model.user.username}}" target="_blank">' +
        '<img class="profile_picture" src="{{model.user.profile_picture}}" alt="{{caption}}"> {{model.user.username}} ' +
        '</a>' +
        '</h2>'+
        '</div>',
    });



    instafeedProfile.run();
    instafeed.run();

});

