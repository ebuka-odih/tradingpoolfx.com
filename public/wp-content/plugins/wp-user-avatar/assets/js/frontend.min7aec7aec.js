!function(){"use strict";!function($,e,t){(new function(){var a=this;this.init=function(){e.ppFormRecaptchaLoadCallback=this.recaptcha_processing,$(".pp-del-profile-avatar").click(this.delete_avatar),$(".pp-del-cover-image").click(this.delete_profile_image_cover),$(document).on("click",".has-password-visibility-icon .pp-form-material-icons",this.toggle_password_visibility),$(document.body).on("click","a.showlogin",(function(){$(".pp_wc_login").slideToggle()})),$(e).on("load resize",(function(){a.defaultUserProfileResponsive()})),"true"!==pp_ajax_form.disable_ajax_form&&($(document).on("submit",'form[data-pp-form-submit="login"]',this.ajax_login),$(document).on("submit",'form[data-pp-form-submit="signup"]',this.ajax_registration),$(document).on("submit",'form[data-pp-form-submit="passwordreset"]',this.ajax_password_reset),$(document).on("submit",'form[data-pp-form-submit="editprofile"]',this.ajax_edit_profile))},this.recaptcha_processing=function(){$(".pp-g-recaptcha").each((function(e,t){var s=$(t).attr("data-sitekey"),r=$(this).parents(".pp-form-container").find("form");if("v3"===$(t).attr("data-type"))r.find("input.pp-submit-form").on("click",(function(e){e.preventDefault(),a._add_processing_label(r),grecaptcha.ready((function(){grecaptcha.execute(s,{action:"form"}).then((function(e){r.find('[name="g-recaptcha-response"]').remove(),r.append($("<input>",{type:"hidden",value:e,name:"g-recaptcha-response"})),r.submit()}))}))}));else{var i=grecaptcha.render(t,{sitekey:s,theme:$(t).attr("data-theme"),size:$(t).attr("data-size")});r.on("pp_form_submitted",(function(){grecaptcha.reset(i)}))}}))},this.reset_form=function(e){e.find("input:text, input:password, input:file, select, textarea").val(""),e.find("input:radio, input:checkbox").removeAttr("checked").removeAttr("selected")},this.toggle_password_visibility=function(e){e.preventDefault();var t=$(this).parents(".pp-form-field-input-textarea-wrap").find(".pp-form-field");"password"===t.attr("type")?(t.attr("type","text"),$(this).text("visibility_off")):(t.attr("type","password"),$(this).text("visibility"))},this.ajax_edit_profile=function(t){if(void 0!==e.FormData&&e.FormData){t.preventDefault();var s=$('form[data-pp-form-submit="editprofile"]'),r=a.get_melange_id(s),i=new FormData(this);i.append("action","pp_ajax_editprofile"),i.append("nonce",pp_ajax_form.nonce),i.append("melange_id",r),$(".profilepress-edit-profile-status").remove(),$(".profilepress-edit-profile-success").remove(),""!==e.edit_profile_msg_class&&$("."+e.edit_profile_msg_class).remove(),a._add_processing_label(s),$.post({url:pp_ajax_form.ajaxurl,data:i,cache:!1,contentType:!1,enctype:"multipart/form-data",processData:!1,dataType:"json",success:function(t){s.trigger("pp_form_submitted"),s.trigger("pp_form_edit_profile_success",[s]),"avatar_url"in t&&""!==t.avatar_url&&($("img[data-del='avatar'], img.pp-user-avatar").attr("src",t.avatar_url),$("input[name=eup_avatar]",s).val("")),"cover_image_url"in t&&""!==t.cover_image_url&&($("img[data-del='cover-image'], img.pp-user-cover-image").attr("src",t.cover_image_url),$("input[name=eup_cover_image]",s).val(""),$(".profilepress-myaccount-has-cover-image",s).show(),$(".profilepress-myaccount-cover-image-empty",s).hide()),"message"in t&&(e.edit_profile_msg_class=$(t.message).attr("class"),s.before(t.message)),"redirect"in t&&(s.trigger("pp_edit_profile_success_before_redirect"),e.location.assign(t.redirect)),a._remove_processing_label(s)}},"json")}},this.ajax_password_reset=function(e){e.preventDefault();var t=$(this),s=a.get_melange_id(t),r="true"===t.find('input[name="is-pp-tab-widget"]').val(),i={action:"pp_ajax_passwordreset",data:$(this).serialize()+"&melange_id="+s};a._remove_status_notice(),t.parents(".pp-tab-widget-form").prev(".pp-tab-status").remove(),a._add_processing_label(t),$.post(pp_ajax_form.ajaxurl,i,(function(e){if(t.trigger("pp_form_submitted"),"object"!=typeof e)return a._remove_processing_label(t);if("message"in e){if(t.trigger("pp_password_reset_status"),r){var s=e.message.replace("profilepress-reset-status","pp-tab-status");t.parents(".pp-tab-widget-form").before(s)}else t.parents(".lucidContainer").length>0?t.parents(".lucidContainer").before(e.message):t.before(e.message);"status"in e&&!0===e.status&&t.hide(),$('input[name="user_login"]',t).val("")}a._remove_processing_label(t)}),"json")},this.ajax_registration=function(t){if(void 0!==e.FormData&&e.FormData){t.preventDefault();var s=$(this),r=a.get_melange_id(s),i=new FormData(this),p="true"===s.find('input[name="is-pp-tab-widget"]').val();i.append("action","pp_ajax_signup"),i.append("melange_id",r),a._remove_status_notice(),s.parents(".pp-tab-widget-form").prev(".pp-tab-status").remove(),a._add_processing_label(s),$.post({url:pp_ajax_form.ajaxurl,data:i,cache:!1,contentType:!1,enctype:"multipart/form-data",processData:!1,dataType:"json",success:function(t){if(s.trigger("pp_form_submitted"),"object"!=typeof t)return a._remove_processing_label(s);if("message"in t){if(s.trigger("pp_registration_error",[t]),s.trigger("pp_registration_ajax_response",[t]),p){var r=t.message.replace("profilepress-reg-status","pp-tab-status");s.parents(".pp-tab-widget-form").before(r)}else s.parents(".lucidContainer").length>0?s.parents(".lucidContainer").before(t.message):s.before(t.message);a.reset_form(s)}else"redirect"in t&&(s.trigger("pp_registration_success",[t]),e.location.assign(t.redirect));a._remove_processing_label(s)}})}},this.ajax_login=function(t){t.preventDefault();var s=$(this),r={action:"pp_ajax_login",data:$(this).serialize()},i="true"===s.find('input[name="is-pp-tab-widget"]').val();a._remove_status_notice(),a._add_processing_label(s),$.post(pp_ajax_form.ajaxurl,r,(function(t){if(s.trigger("pp_form_submitted"),null===t||"object"!=typeof t)return a._remove_processing_label(s);if("success"in t&&!0===t.success&&"redirect"in t)s.trigger("pp_login_form_success"),e.location.assign(t.redirect);else if(s.trigger("pp_login_form_error"),"code"in t&&"pp2fa_auth_code_invalid"==t.code&&s.find(".pp-2fa").show(),i){var r=t.message.replace("profilepress-login-status","pp-tab-status");s.parents(".pp-tab-widget-form").before(r)}else s.parents(".lucidContainer").length>0?s.parents(".lucidContainer").before(t.message):s.before(t.message);a._remove_processing_label(s)}),"json")},this.delete_avatar=function(e){e.preventDefault();var t=$(this).text(),a=$(this);e.preventDefault(),confirm(pp_ajax_form.confirm_delete)&&(a.is("button")&&a.text(pp_ajax_form.deleting_text),$.post(pp_ajax_form.ajaxurl,{action:"pp_del_avatar",nonce:pp_ajax_form.nonce}).done((function(e){"error"in e&&"nonce_failed"===e.error?(a.text(t),alert(pp_ajax_form.deleting_error)):"success"in e&&($("img[data-del='avatar']").attr("src",e.default),a.remove())})))},this.delete_profile_image_cover=function(e){e.preventDefault();var t=$(this).text(),a=$(this);e.preventDefault(),confirm(pp_ajax_form.confirm_delete)&&(a.is("button")&&a.text(pp_ajax_form.deleting_text),$.post(pp_ajax_form.ajaxurl,{action:"pp_del_cover_image",nonce:pp_ajax_form.nonce}).done((function(e){"error"in e&&"nonce_failed"===e.error&&(a.text(t),alert(pp_ajax_form.deleting_error)),"success"in e&&(""!==e.default?($("img[data-del='cover-image']").attr("src",e.default),a.parent().find(".profilepress-myaccount-has-cover-image").show(),a.parent().find(".profilepress-myaccount-cover-image-empty").hide()):(a.parent().find(".profilepress-myaccount-has-cover-image").hide(),a.parent().find(".profilepress-myaccount-cover-image-empty").show()),a.remove())})))},this.get_melange_id=function(e){var a=$("input.pp_melange_id",e).val();return a===t?"":a},this._add_processing_label=function(e){var t=e.find("input[data-pp-submit-label]");t.attr({value:t.data("pp-processing-label"),disabled:"disabled"}).css("opacity",".4")},this._remove_processing_label=function(e){var t=e.find("input[data-pp-submit-label]");t.attr("value",t.data("pp-submit-label")),t.attr({value:t.data("pp-submit-label"),disabled:null}).css("opacity","")},this._remove_status_notice=function(){$(".profilepress-login-status,.pp-tab-status,.profilepress-edit-profile-success,.profilepress-edit-profile-status,.pp-reset-success,.profilepress-reset-status,.profilepress-reg-status").remove()},this.defaultUserProfileResponsive=function(){$(".ppress-default-profile, .pp-member-directory").each((function(){var e=$(this),t=e.width();t<=340?(e.removeClass("ppressui340"),e.removeClass("ppressui500"),e.removeClass("ppressui800"),e.removeClass("ppressui960"),e.addClass("ppressui340")):t<=500?(e.removeClass("ppressui340"),e.removeClass("ppressui500"),e.removeClass("ppressui800"),e.removeClass("ppressui960"),e.addClass("ppressui500")):t<=800?(e.removeClass("ppressui340"),e.removeClass("ppressui500"),e.removeClass("ppressui800"),e.removeClass("ppressui960"),e.addClass("ppressui800")):t<=960?(e.removeClass("ppressui340"),e.removeClass("ppressui500"),e.removeClass("ppressui800"),e.removeClass("ppressui960"),e.addClass("ppressui960")):t>960&&(e.removeClass("ppressui340"),e.removeClass("ppressui500"),e.removeClass("ppressui800"),e.removeClass("ppressui960")),e.css("opacity",1)})),$(".ppress-default-profile-cover, .ppress-default-profile-cover-e").each((function(){var e=$(this),t=Math.round(e.width()/e.data("ratio"))+"px";e.height(t),e.find(".ppress-dpf-cover-add").height(t)}))}}).init()}(jQuery,window,void 0)}();