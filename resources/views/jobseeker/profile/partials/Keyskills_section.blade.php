       <div class="user-dashboard-info-box">
           <div class="row ">
               <div class="col-lg-12">
                   <a href="" class="float-end fw-bold" data-bs-toggle="modal" data-bs-target="#keyskill-modal">Add Skills</a>
                   <h4 class="fw-normal">Key Skills</h4>
                   <p class="m-0">Looking for jobs requiring following </p>
                   <h5 class="d-inline-block mb-0 mt-2 pt-1 pe-1"><span class="fw-light badge bg-primary rounded-pill">HTML</span></h5>
                   <h5 class="d-inline-block mb-0 mt-2 pt-1 pe-1"><span class="fw-light badge bg-primary rounded-pill">CSS</span></h5>
                   <h5 class="d-inline-block mb-0 mt-2 pt-1 pe-1"><span class="fw-light badge bg-primary rounded-pill">Javascript</span></h5>
                   <h5 class="d-inline-block mb-0 mt-2 pt-1 pe-1"><span class="fw-light badge bg-primary rounded-pill">React</span></h5>

               </div>
           </div>

       </div>

       <!--================================= Key skills Modal Popup -->
       <div class="modal fade" id="keyskill-modal" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
           <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered modal" role="document">
               <div class="modal-content mx-2 border-0" id="display">
                   <div class="modal-header p-3 bg-primary">
                       <h4 class="mb-0 text-left text-white">Key Skills</h4>
                   </div>


                   <div class="modal-body position-relative p-0 customScroll">
                       <div class="login-register overflow-hidden">
                           <div class="tab-content">
                               <div class=" tab-pane active">
                                   <div class="row m-lg-5">

                                       <form action="" class="" id="key-skill" onkeypress="return event.keyCode != 13">
                                           <div class="row modalShadow p-4 ">
                                               <div class="position-relative">
                                                   <div class="form-group col-12  mb-3">
                                                       <p>Tell recruiters what you know or what you are known for e.g. Direct Marketing, Oracle, Java etc. We will send you job recommendations based on these skills. Each skill is separated by a comma.</p>
                                                   </div>

                                               </div>
                                               <div class="col-12">
                                                   <div class="form-group my-1 position-relative">
                                                       <label class="form-label text-dark" for="select-skills">Skills<em class="text-danger">*</em></label>
                                                       <select multiple name="key_skills" id="skills" class="top-0  position-relative demo-default web-select2">
                                                           <option value="">Select skills...</option>
                                                           <option value="php" selected>PHP </option>
                                                           <option>Laravel </option>
                                                           <option>CSS </option>
                                                           <option>Javascript </option>
                                                           <option>Python </option>
                                                       </select>
                                                   </div>
                                               </div>

                                               <div class="col-md-12 mt-2">
                                                   <div class="text-center">
                                                       <button type="submit" style="font-weight:400;" class="btn btn-primary btn-sm p-2">Save</button>
                                                       <button type="button" id="btnClear" name="cancel" onclick="confirmCancelForm($(this), $('#confirmSkillModal'), $('#keyskill-modal'))" class="bg-overlay-black-20 btn btn-sm p-2 rounded-pill text-body" style="color:#fff; font-weight:400;">Cancel</button>
                                                   </div>
                                                   <div id="confirmSkillModal" class="text-center confirmcanscel" style="display: none">
                                                       <p>Are you really want to cancel this form as it will erase all the filled data?</p>
                                                       <button type="button" class="btn btn-sm bg-primary text-white" onclick="closeEduModal($(this))" data-bs-dismiss="modal">Yes</button>
                                                       <button type="button" class="btn btn-sm bg-warning text-white" onclick="notCloseEduModal($(this))">No</button>
                                                   </div>
                                               </div>
                                           </div>
                                       </form>

                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="position-absolute bottom-0 start-0" style="z-index: -1;">
                       <img src="{{ asset('assets/images/bg4.svg')}}" class="navbar-brand-img" alt="main_logo">
                   </div>
                   <button type="button" class="btn-close close-btn cancel_modal abs-position" onclick="confirmCancelForm($(this), $('#confirmSkillModal'), $('#keyskill-modal'))" aria-label="Close"></button>
               </div>
           </div>
       </div>

       @section('keyskill-script')
       <script>
           // validation

           $("#key-skill").validate({
               ignore: ':hidden:not([class~=selectized]),:hidden > .selectized, .selectize-control .selectize-input input',

               rules: {
                   key_skills: {
                       required: true
                   }
               },
               errorPlacement: function(label, element) {
                   if (element.hasClass('web-select2')) {
                       label.insertAfter(element.next('.select2-container')).addClass('mt-2 ');
                       label.insertAfter(element.next('.selectize-control')).addClass('mt-2 ');
                       select2label = label
                   } else {
                       // label.addClass('mt-2');
                       label.insertAfter(element);
                   }
               },

               messages: {

                   key_skills: {
                       required: "Select skills"
                   }
               }
           })



           //    select skills
           var $Key_skills = $('#skills').selectize({
               persist: false,
               create: true
           }).on('change', function() {
               $(this).valid();
           });
       </script>
       @endsection