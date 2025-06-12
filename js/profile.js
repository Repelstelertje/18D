var router = new VueRouter({
    mode: 'history',
    routes: []
});

function getQueryParam(name){
    var params = new URLSearchParams(window.location.search);
    return params.get(name);
}

var profiel= new Vue({
    router,
    el: "#profiel",
    created: function(){
        var id = this.$route && this.$route.query ? this.$route.query.id : null;
        if(!id){
            id = getQueryParam('id');
        }
        if(1*id > 0){
            this.profile_id = 1*id;
            this.init();
        }
        console.log(this.profile_id);
    },
    data: {
        profile_id: 0,
        profile: { name : '', 
                  city : '',
                  profile_image_big : '',
                  aboutme : '',
                  province : '',
                  relationship : '',
                  length : '',
                  url : '',
                 },

    },
    computed: {
    },
    methods:  {
        init: function(){
            if(this.profile_id <= 0){
                return;
            }
            let that= this;
            axios.get(api_url + this.profile_id)
                .then(function(response){
                    that.profile = response.data.profile;
                    if(that.profile.profile_image_big && that.profile.profile_image_big.indexOf('no_img_Vrouw.jpg') !== -1){
                        that.profile.profile_image_big = 'img/fallback.svg';
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        imgError: function(event){
            event.target.src = 'img/fallback.svg';
        }
    }
});
