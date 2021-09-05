$(window).scroll(function() {
    if ($(this).scrollTop()>300)
     {
        $('.top-bar').hide(1000);
        $('.navbar-brand').addClass('navbar-brand-scroll');
        $('.navbar').addClass("navbar-scroll");      
     }
    else
     {
      $('.top-bar').show(1000);
      $('.navbar-brand').removeClass('navbar-brand-scroll');
      $('.navbar').removeClass("navbar-scroll");
     }
 });

 
// Code for adding and removing qualifications

(function ($) {
    $(document).ready(function () {

        $('#add-fieldsQ').on('click', function () {
            let n = $("#educational-fields .row").length;
            let newFields = `<div class='row'>
                                    <div class='form-group col-md-4'>
                                        <input type='text' class='form-control' required name='qualifications[${n + 1}][institution]' id='institution-1' placeholder='Tertiary Institution / School:'>
                                    </div>

                                    <div class='form-group col-md-2'>
                                        <input type='text' class='form-control' required name='qualifications[${n + 1}][institution-location]' id='institution-location-1' placeholder='Location'>
                                    </div>

                                    <div class='form-group col-md-3'>
                                        <input type='text' class='form-control' required name='qualifications[${n + 1}][qualification]' id='qualification-1' placeholder='Qualification'>
                                    </div>

                                    <div class='form-group col-md-3'>
                                        <input type='number' class='form-control' required name='qualifications[${n + 1}][year-completed]' id='year-completed' placeholder='Year Completed'>
                                    </div>
                               
                                </div>`;
            $('#educational-fields').append(newFields);
          
        });

        $('#remove-fieldsQ').on('click', function (){
            $('#educational-fields').children().last().remove();
        });



//Code for adding and removing employment history



        $('#add-fieldsX').on('click', function () {
            let n = $("#experience-fields .row").length;
            let newFields = `<div class='row'>
                                    <div class='form-group col-md-3'>
                                        <span class=' d-inline-flex'>1. Recent/Current Employer: </span>
                                        <input type='text' class='form-control' required name='experience[${n + 1}][employer]' id='employer-1' placeholder='type here'>
                                    </div>
                                    <div class='form-group col-md-3'>
                                        <span class=' d-inline-flex'>Position held: </span>
                                        <input type='text' class='form-control' required name='experience[${n + 1}][position]' id='p.position-1' placeholder='type here'>
                                    </div>
                                    <div class='form-group col-md-3'>
                                        <span class=' d-inline-flex'> Appointment Date: </span>
                                        <span class=' d-inline-flex'>
                                            <input type='date' class='form-control' required name='experience[${n + 1}][appointment-date]' id='appointment-date-1' placeholder='Appointment Date:'>
                                        </span>
                                    </div>
                                    <div class='form-group col-md-3'>
                                        <span class=' d-inline-flex'>Termination Date: </span>
                                        <span class=' d-inline-flex'>
                                            <input type='date' class='form-control' required name='experience[${n + 1}][termination-date]' id='termination-date-1' placeholder='Termination Date:'>
                                        </span>
                                    </div>
                                      <div class='form-group col-md-12'>
                                    <input type='text' class='form-control' required name='experience[${n + 1}][duties]' id='duties-1' placeholder='Duties & Responsibilities'>
                                </div>
                                    </div>
                                  `;
            $('#experience-fields').append(newFields);
          
        });

        $('#remove-fieldsX').on('click', function (){
            $('#experience-fields').children().last().remove();
        });



//CODE FOR ADDING OR REMOVING REFERENCES


        $('#add-fieldsR').on('click', function () {
            let n = $("#reference-fields .row").length;
            let newFields = `<div class='row'>
                                    <div class='form-group col-md-3'>
                                        <input type='text' class='form-control' required name='references[${n + 1}][refname]' id='refname-1' placeholder='Name & Surname:'>
                                    </div>
                                    <div class='form-group col-md-2'>
                                        <input type='text' class='form-control' required name='references[${n + 1}][ref-position]' id='ref-position-1' placeholder='Position'>
                                    </div>
                                    <div class='form-group col-md-3'>
                                        <input type='text' class='form-control' required name='references[${n + 1}][ref-organisation]' id='ref-organisation-1' placeholder='Organisation'>
                                    </div>
                                    <div class='form-group col-md-2'>
                                        <input type='number' class='form-control' required name='references[${n + 1}][ref-phone]' id='ref-phone-1' placeholder='Phone'>
                                    </div>
                                    <div class='form-group col-md-2'>
                                        <input type='text' class='form-control' required name='references[${n + 1}][ref-email]' id='email-1' placeholder='Email'>
                                    </div>
                                </div>`;
            $('#reference-fields').append(newFields);
          
        });

        $('#remove-fieldsR').on('click', function (){
            $('#reference-fields').children().last().remove();
        });



//code for adding and removing affiliation


        $('#add-fieldsA').on('click', function () {
            let n = $("#affiliation-fields .row").length;
            let newFields = `<div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" required name="affiliation[${n + 1}][orgarnisation]" id="orgarnisation" placeholder="Orgarnisation">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <span class=" d-inline-flex">Affiliation/Membership Date: </span>
                                        <span class=" d-inline-flex">
                                            <input type="date" class="form-control" id="affiliation-date" required name="affiliation[${n + 1}][date]" placeholder="Affiliation Date:">
                                        </span>
                                    </div>
                                </div>`;
            $('#affiliation-fields').append(newFields);
          
        });

        $('#remove-fieldsA').on('click', function (){
            $('#affiliation-fields').children().last().remove();
        });

    });
})(jQuery);