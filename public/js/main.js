function openNav() {
  document.getElementById("mySidepanel").style.width = "350px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}

function validateForm() {
  var x = document.getElementById('name').value;
  if (x == "") {
    document.getElementById('status').innerHTML = "Name cannot be empty";
    return false;
  }
  x = document.getElementById('email').value;
  if (x == "") {
    document.getElementById('status').innerHTML = "Email cannot be empty";
    return false;
  } else {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(x)) {
      document.getElementById('status').innerHTML = "Email format invalid";
      return false;
    }
  }
  x = document.getElementById('country').value;
  if (x == "") {
    document.getElementById('status').innerHTML = "Country cannot be empty";
    return false;
  }
  x = document.getElementById('subject').value;
  if (x == "") {
    document.getElementById('status').innerHTML = "Message cannot be empty";
    return false;
  }
  //get input field values data to be sent to server
  document.getElementById('status').innerHTML = "Sending...";
  formData = {
    'name': $('input[name=name]').val(),
    'email': $('input[name=email]').val(),
    'country': $('input[name=country]').val(),
    'subject': $('textarea[name=subject]').val()
  };
  $.ajax({
    url: "https://localhost/pai/pages/contactus",
    type: "POST",
    data: formData,
    success: function (data) {

      $('#status').text(data.message);
      if (data.code) //If mail was sent successfully, reset the form.
        $('#contact-form').closest('form').find("input[type=text], textarea").val("");
    },
    error: function (jqXHR) {
      console.log(jqXHR.status);
      $('#status').text(jqXHR);
    }
  });
}

function deleteRecord(id) {
  console.log(id);
  formData = {
    'id': id
  };
  console.log(formData);
  $.ajax({
    url: "https://localhost/pai/users/admin/" + id,
    type: "POST",
    data: formData,
    success: function (data) {

      $('#status').text(data.message);
      if (data.code)
        console.log("true");
      $('#messagesTable').load("https://localhost/pai/users/admin #messagesTable");
    },
    error: function (jqXHR) {
      console.log(jqXHR.status);
      $('#status').text(jqXHR);
    }
  });
}