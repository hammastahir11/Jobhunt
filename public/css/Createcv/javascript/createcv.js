var current_fs, next_fs, previous_fs;
var left, opacity, scale;
var animating;
$(".next").click(function () {
  if (animating) return false;
  animating = true;

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  next_fs.show();
  current_fs.animate(
    { opacity: 0 },
    {
      step: function (now, mx) {
        scale = 1 - (1 - now) * 0.2;
        left = now * 50 + "%";
        opacity = 1 - now;
        current_fs.css({
          transform: "scale(" + scale + ")",
          position: "absolute"
        });
        next_fs.css({ left: left, opacity: opacity });
      },
      duration: 800,
      complete: function () {
        current_fs.hide();
        animating = false;
      },
      easing: "easeInOutBack"
    }
  );
});

$(".previous").click(function () {
  if (animating) return false;
  animating = true;

  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  $("#progressbar li")
    .eq($("fieldset").index(current_fs))
    .removeClass("active");

  previous_fs.show();
  current_fs.animate(
    { opacity: 0 },
    {
      step: function (now, mx) {
        scale = 0.8 + (1 - now) * 0.2;
        left = (1 - now) * 50 + "%";
        opacity = 1 - now;
        current_fs.css({ left: left });
        previous_fs.css({
          transform: "scale(" + scale + ")",
          opacity: opacity
        });
      },
      duration: 800,
      complete: function () {
        current_fs.hide();
        animating = false;
      },
      easing: "easeInOutBack"
    }
  );
});

$(".submit").click(function () {
  return false;
});





// More Fields for add experience
$(document).ready(function () {
  var max_fields = 3; //maximum input boxes allowed
  var wrapper = $(".input_field_wrap"); //Fields wrapper
  var add_button = $(".add_exp_button"); //Add button ID

  var x = 1; //initlal text box count
  $(add_button).click(function (e) { //on add input button click
    e.preventDefault();
    if (x < max_fields) { //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div class="newexp"> <h3 class="fs-subtitle"><br/>Experience '+x+'</h3> <input type="text" name="jobname'+x+'" placeholder="job Name" /> <textarea name="jobdesc'+x+'" placeholder="Job Description/Project Detail"/> <input type="text" name="sy'+x+'" placeholder="Start Year" /><input type="text" name="ey'+x+'" placeholder="End Year" /> <a href="#" class="remove_field">Remove</a> </div>'); //add input box
    }
  });

  $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
// More Fields for add education
$(document).ready(function () {
  var max_fields = 3; //maximum input boxes allowed
  var wrapper = $(".input_fields_wrap"); //Fields wrapper
  var add_button = $(".add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(add_button).click(function (e) { //on add input button click
    e.preventDefault();
    if (x < max_fields) { //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div > <h3 class="fs-subtitle"><br/>Experience '+x+'</h3> <input type="text" name="instname'+x+'" placeholder="Institution Name" /> <textarea name="coursedesc'+x+'" placeholder="Courses Description/Courses Detail"/> <input type="text" name="esy'+x+'" placeholder="Start Year" /><input type="text" name="eey'+x+'" placeholder="End Year" /> <a href="#" class="remove_field">Remove</a> </div>'); //add input box
    }
  });

  $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});



//Percentage

$(document).ready(function () {
  var max_fields = 5; //maximum input boxes allowed
  var wrapper = $(".input_field1_wrap"); //Fields wrapper
  var add_button = $(".add_skill_button"); //Add button ID

  var x = 1; //initlal text box count
  $(add_button).click(function (e) { //on add input button click
    e.preventDefault();
    if (x < max_fields) { //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div > <h3 class="fs-subtitle"><br/>SKILL '+x+'</h3> <input type="text" name="skillname'+x+'" placeholder="Skill Name" class="form-control input-sm" />  <input type="text" name="percentage'+x+'" placeholder="SKills in %" class="form-control input-sm" /> <a href="#" class="remove_field">Remove</a> </div>'); //add input box
    }
  });

  $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
