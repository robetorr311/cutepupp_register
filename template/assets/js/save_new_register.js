function save_new_register(){
            var username=jQuery("#username");
            var password=jQuery("#password");
            var firstname=jQuery("#firstname");
            var lastname=jQuery("#lastname");
            var street=jQuery("#street");
            var apt=jQuery("#apt");
            var city=jQuery("#city");
            var state=jQuery("#state");
            var zip=jQuery("#zip");
            var country=jQuery("#country");
            var phone=jQuery("#phone");
            var mobile=jQuery("#mobile");
            var workphone=jQuery("#workphone");
            var email=jQuery("#email");
            var active=jQuery("#active");
            var howfound=jQuery("#howfound");
            var howpay=jQuery("#howpay");
            var registration_code=jQuery("#registration_code");
            var kennel=jQuery("#kennel");
            var url=jQuery("#url");
            var breeding=jQuery("#breeding");
            var breed1=jQuery("#breed1");
            var breed2=jQuery("#breed2");
            var breed3=jQuery("#breed3");
            var breed4=jQuery("#breed4");
            var breed5=jQuery("#breed5");
            var breed6=jQuery("#breed6");
            var contract=jQuery("#contract");
            var active=jQuery("#active");
            var license=jQuery("#license");
            var vet_name=jQuery("#vet_name");
            var vet_phone=jQuery("#vet_phone");
            var travel_info=jQuery("#travel_info");
            var montreal=false;
            if (jQuery("#montreal").is(':checked')){
              montreal=true;
            }
            else {
              montreal=false;
            }            
            var toronto=false;
            if (jQuery("#toronto").is(':checked')){
              toronto=true;
            }
            else {
              toronto=false;
            }            
            var vancouver=false;
            if (jQuery("#vancouver").is(':checked')){
              vancouver=true;
            }
            else {
              vancouver=false;
            }            
            var anchorage=false;
            if (jQuery("#anchorage").is(':checked')){
              anchorage=true;
            }
            else {
              anchorage=false;
            }            
            var data= {
                action:'saveregister',
                username: username,
                password: password,
                firstname: firstname,
                lastname: lastname,
                street: street,
                apt: apt,
                city: city,
                state: state,
                zip: zip,
                country: country,
                phone: phone,
                mobile: mobile,
                workphone: workphone,
                email: email,
                active: active,
                howfound: howfound,
                howpay: howpay,
                registration_code: registration_code,
                kennel: kennel,
                url: url,
                breeding: breeding,
                breed1: breed1,
                breed2: breed2,
                breed3: breed3,
                breed4: breed4,
                breed5: breed5,
                breed6: breed6,
                contract: contract,
                active: active,
                license: license,
                vet_name: vet_name ,
                vet_phone: vet_phone,
                travel_info: travel_info,
                montreal: montreal,
                toronto: toronto,
                vancouver: vancouver,
                anchorage: anchorage 
            };
            jQuery.post('admin-ajax.php', data, function(response) {
              jQuery("html,body").scrollTop();
              jQuery("#container-register").html((response));
            }); 
}