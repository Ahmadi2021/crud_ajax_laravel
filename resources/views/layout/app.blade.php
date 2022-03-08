<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        {{-- jquery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        

        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
           
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container"> 
        {{-- @if(session()->has('success'))
            <div class="successSession" id="successSession">
                {{session()->get('success')}}
            </div>
        @endif --}}
 
       
         @yield('content')

        
        </div>
         {{-- Jquery  --}}
         <script> 
        //  $(document).ready(function () {

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            fetch_data();
        // Retrive Data
        function fetch_data(){
            $.ajax({
                 type:'GET',
                 url:'/ajax_index',
                 contentType:false,
                 processData:false,
                 dataType:"json",
                 success:function(response){
                    $('.rows').html('');
                    $.each(response.data,function($key,arr_value){
                        $('tbody.rows').append(
                            '<tr><td>'
                               +arr_value.name +'</td>'
                               +'<td>'+arr_value.fname +'</td>'
                               +'<td>'+arr_value.phone +'</td>'
                               +'<td><img src="images/'+arr_value.image +'" height="100px" width="100px" style="border-radius: 50%;"></td>'
                               +'<td><button class="delete_button  action-icon"  data-id="'+arr_value.id+'"><i class="fa fa-trash" style="color:red;font-size:20px;float: right; margin-right: 20px;"></i></button>'
                               +'<button class="update_emp action-icon" id="update_action_btn" data-id="'+arr_value.id+'"><i class="fa fa-edit" style="color:green;font-size:20px;float: right;margin-right: 20px;"></i></button>'

                               
                               +'</td></tr>');
                    });
                    
                 },
                 error(err){
                     console.log(err);
                 }
            });
        }
            // ////////////Close Button
            $('.model .close1').click(function(){
               $('.model ').removeClass('show-model_delete');
           });
            $('.model .close1').click(function(){
               $('.model').removeClass('show-form');
           });
        ////////// Delete Employee
            
        $(document).on('click','.delete_button' ,function(){
               var emp_id = $(this).attr('data-id');
               $('.delete_submit').attr('data-id',emp_id);
               $('.model.delete').addClass('show-model_delete');
           });
           $(document).on('click','.delete_submit',function(event){
               event.preventDefault();
            //    var emp_id = $('.delete_button').attr('data-id');
               //alert('here');
               var emp_id = $(this).attr('data-id');
               $.ajax({
                   type:"delete",
                   url:'/employee/'+emp_id,
                   contentType:false,
                   processData:false,
                   dataType: 'json',
                //    data:emp_id,
                   success:function(response){
                    $('.model ').removeClass('show-model_delete');
                    $('.delete_message ').html('');
                    $('.delete_message ').append('<div class="successSession">'+response.success +'</div>');
                    fetch_data();
                    console.log(response.success);
                   },
               });
           });

        // /////////////////////////////////Add Eployee Form
       
           $('.create_student').click(function(){
               $('.header h2').text('ADD Employee');
               $('#action').val('ADD');
            //    $('#add_action_btn').val('ADD');
               $('#create_emp')[0].reset();  
               $('#store_image').html('');  
               $('.model.form').addClass('show-form');
               $('.errorSession ul').addClass('d-none');
               $('.success  .successSession').addClass('d-none');

           });

        // /////////////////////////////// Edit Employee 
    
            $(document).on('click','.update_emp' ,function(){
               $('.header h2').text('Edit Employee');
               $('#action').val('edit');
               var emp_id = $(this).attr('data-id');
               $('.errorSession ul').addClass('d-none');
               $('.success .successSession').addClass('d-none'); 
               $('.model.form').addClass('show-form');
               
             $.ajax({
               
                type: "GET",
                url: '/employee/'+emp_id+'/edit',
                dataType:"json",
                processData: false,
                contentType: true,
                success:function(response){
                 console.log(response);
                 $('#name').val(response.data.name);
                 $('#fname').val(response.data.fname);
                 $('#phone').val(response.data.phone);
                 $('#id').val(emp_id);
                 
                //$('#store_image').html("<img src='{{URL::to('/')}}/images/"+response.data.image +"' width=70 height=70 class='image-thumbnail'>");
                },
              
               
             });
         
           });

        // Employee Form submit

          $('.create_emp').submit(function(event){
              event.preventDefault();
              if($('#action').val() =="ADD"){
                $('#method').attr('value','');
                var formData = new FormData($('#create_emp')[0]);
              $.ajax({
                  type: "POST",
                  url: '/employee',
                  processData: false,
                  contentType: false,
                  data: formData,
                  
                  
                  success:function(response){
                        console.log(response); 
                        $('.success .successSession').html('');
                        $('.errorSession ul').html('');
                        $('.success .successSession').removeClass('d-none');
                         $('.success .successSession').append('<li>'+ response.success +' </li>');
                         $('#create_emp')[0].reset();
                         fetch_data();
                     },
                 error(err){
                    console.log(formData);
                    console.log(err);
                        $('.errorSession ul').html('');
                        $('.errorSession ul').removeClass('d-none');
                        // $.each(err.responseJSON.errors,function(key,arr_value){
                        //     console.log(key);
                        //     $('.errorSession ul').append('<li>*'+ arr_value +'</li>');
                        
                        // });
                        if(err.responseJSON.errors.name){
                            $('.name ul').append('<li>*'+err.responseJSON.errors.name[0] +'</li>');
                        }
                        if(err.responseJSON.errors.fname){
                            $('.fname ul').append('<li>*'+err.responseJSON.errors.fname[0] +'</li>');  
                        }
                        if(err.responseJSON.errors.phone){
                            $('.phone ul').append('<li>*'+err.responseJSON.errors.phone[0] +'</li>'); 
                        }
                        if(err.responseJSON.errors.image){
                            $('.image ul').append('<li>*'+err.responseJSON.errors.image[0] +'</li>');
                        }
        
              },
              })

              }else if($('#action').val() == 'edit'){
                //   $('.update_emp').click(function(){
                //     var emp_id = $('.update_emp').attr('data-id');
                //   });  
                
                $('#method').attr('value','PUT');
                var formData = new FormData($('#create_emp')[0]);
                var emp_id = $('#id').val();
                $.ajax({
                    type:"POST",
                    url:'/employee/'+emp_id,
                    processData:false,
                    contentType:false,
                    dataType:'json',
                    cache:false,
                    data:formData,
                    success:function(response){
                        console.log(response); 
                        $('.success .successSession').html('');
                        $('.errorSession ul').html('');
                        $('.success .successSession').removeClass('d-none'); 
                         $('.success .successSession').append('<li>'+ response.success +' </li>');
                         fetch_data();
                         
                    },
                    error(err){
                        $('.success .successSession').html('');
                         $('.errorSession ul').html('');
                        $('.errorSession ul').removeClass('d-none');
                        // $.each(err.responseJSON.errors,function(key,arr_value){
                            console.log(err);
                        //     $('.errorSession ul').append('<li>*'+ arr_value +'</li>');
                        
                        // });
                        
                        if(err.responseJSON.errors.name){
                            $('.name ul').append('<li>*'+err.responseJSON.errors.name[0] +'</li>');
                        }
                        if(err.responseJSON.errors.fname){
                            $('.fname ul').append('<li>*'+err.responseJSON.errors.fname[0] +'</li>');  
                        }
                        if(err.responseJSON.errors.phone){
                            $('.phone ul').append('<li>*'+err.responseJSON.errors.phone[0] +'</li>'); 
                        }
                        // if(err.responseJSON.errors.image){
                        //     // $('.image ul').append('<li>*'+err.responseJSON.errors.image[0] +'</li>');
                        // } 
                    }
                });
              }
             
             
          });

 


 
        // End of Jquery
        // });
           </script>
    </body>
</html>

  
