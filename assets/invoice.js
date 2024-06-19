
var bid_h = document.getElementById('bid_home').value;

$('#save_draft_button').load('crm_ajax/invoice_save_draft.php',{ b_id:bid_h });
         $('#info_load').load('crm_ajax_add/flights.php');
         $('#info_load_data').load('crm_ajax_add/view_flights.php');
         $('#flight_pnr').load('crm_ajax_add/show_pnr.php');


         function convert_pnr(){
           var pnr_text = document.getElementById('pnr_code').value;
           $('#flight_pnr').load('crm_ajax_add/pnr_results.php',{
             pnr:pnr_text
           });
         }


         function finalizePNR(){
           var pnr_text = document.getElementById('pnr_code').value;
           $.ajax({
            url:'backend/add_pnr.php',
            method:'POST',
            data:{
              pnr:pnr_text
            },
            success:function(resp){
              console.log(resp);
              if(resp == 200){
                $('#flight_pnr').load('crm_ajax_add/show_pnr.php');
              }
              else if(resp == 9001){
                swal("Warning", "You need to add the lead passenger before you enter the flight details", "warning");
              }
            }
           });
         }

         function openPassengerEditModal(id){
           $('#editModal').modal('show');
           $('#load_edit_data').load('crm_ajax_edit/flights.php',{ p_id:id });
         }

         function openPnrEditModal(id){
           $('#editModal').modal('show');
           $('#load_edit_data').load('crm_ajax_edit/pnr.php',{f_i_id:id });
         }


         function openHotelEditModal(id){
           $('#editModal').modal('show');
           $('#load_edit_data').load('crm_ajax_edit/hotel_details.php',{ h_id:id });
         }

         function openTransferEditModal(id){
           $('#editModal').modal('show');
           $('#load_edit_data').load('crm_ajax_edit/transfers.php',{ t_id:id });
         }

         function openOtherChargesEditModal(id){
          $('#editModal').modal('show');
          $('#load_edit_data').load('crm_ajax_edit/other_charges.php',{ o_c_id:id });
        }

        function openIteneryModal(){

          $('#editModal').modal('show');
          $('#load_edit_data').load('crm_ajax_add/add_itenery.php');
        }




         function del_p_td(id){
           if(confirm('Are you sure you want to delete the Transfer?')){
             $.ajax({
              url:"backend/del_t.php",
              method:"post",
              data:{
                t_id:id
              },
              success:function(resp){
                if(resp == 200){
                  $('#info_load_data').load('crm_ajax_add/view_transfers.php');
                  $('#info_load').load('crm_ajax_add/transfers.php');
                  swal("Removed", "Transfer Information Removed", "success");
                }
                else {
                  console.log(resp);
                  swal("Developer Notified", "Something Went Wrong", "error");
                }
              }
             });
           }
         }


         function del_p_pnr(id){
           if(confirm('Are you sure you want to delete the PNR?')){
             $.ajax({
              url:"backend/del_f_pnr.php",
              method:"post",
              data:{
                fiid:id
              },
              success:function(resp){
                if(resp == 200){
                  $('#info_load_data').load('crm_ajax_add/view_flights.php');
                     $('#info_load').load('crm_ajax_add/flights.php');
                     $('#flight_pnr').load('crm_ajax_add/show_pnr.php');
                  swal("Removed", "PNR Information Removed", "success");
                }
                else {
                  console.log(resp);
                  swal("Developer Notified", "Something Went Wrong", "error");
                }
              }
             });
           }
         }

         function del_p_hd(id){
           if(confirm('Are you sure you want to delete the hotel?')){
             $.ajax({
              url:"backend/del_h.php",
              method:"post",
              data:{
                h_id:id
              },
              success:function(resp){
                if(resp == 200){
                  $('#info_load_data').load('crm_ajax_add/view_hotels.php');
                  $('#info_load').load('crm_ajax_add/hotel_details.php');
                  swal("Removed", "Hotel Information Removed", "success");
                }
                else {
                  console.log(resp);
                  swal("Developer Notified", "Something Went Wrong", "error");
                }
              }
             });
           }
         }

         function del_p_fd(id,lpn){
           if(confirm('Are you sure you want to delete the passenger?')){
             $.ajax({
              url:"backend/del_f_p.php",
              method:"post",
              data:{
                p_id:id,
                lp:lpn
              },
              success:function(resp){
                if(resp == 9001){
                  swal("Warning", "You cannot delete the lead passenger when their is a sub passenger", "error");
                }
                else if(resp == 200){
                  $('#info_load_data').load('crm_ajax_add/view_flights.php');
                  $('#info_load').load('crm_ajax_add/flights.php');
                  swal("Removed", "Flight Passenger Information Removed", "success");
                }
                else {
                  console.log(resp);
                  swal("Developer Notified", "Something Went Wrong", "error");
                }
              }
             });
           }
         }


         function editOtherCharge(){
          var vendor_name = document.getElementById('ed_vendor_name').value;
          var o_c_id =document.getElementById('o_c_id').value;
              var other_c_name = document.getElementById('ed_other_c_name').value;
               var other_charge_price = document.getElementById('ed_other_charge_price').value;
               var other_charge_sell_price = document.getElementById('ed_other_charge_sell_price').value;
               $.ajax({
                 url:'backend/edit_other_charges.php',
                 method:'POST',
                 data:{
                  e_vendor_name:vendor_name,
                  e_other_c_name:other_c_name,
                  e_other_charge_price:other_charge_price,
                  e_other_charge_sell_price:other_charge_sell_price,
                  oc_id:o_c_id

                 },
                 success:function(resp){
                     if(resp == 200){
                      document.getElementById('other_c_name').value="";
                      document.getElementById('other_charge_price').value="";
                      document.getElementById('other_charge_sell_price').value="";
                      $('#info_load_data').load('crm_ajax_add/view_other_charges.php');
                     $('#info_load').load('crm_ajax_add/other_charge.php');
                     $('#editModal').modal('hide');
                     swal("Changed", "Other Charges Changed", "success");  }
                     else {
                       console.log(resp);
                     }
                 }
               });
           }

         function editPnr(){

          var f_iid =document.getElementById('fiid').value;
              var flight_no = document.getElementById('flight_no').value;
               var depart_from = document.getElementById('depart_from').value;
               var depar_date = document.getElementById('depar_date').value;
               var arrive_to = document.getElementById('arrive_to').value;
               var arrive_time = document.getElementById('arrive_time').value;
               var duration = document.getElementById('duration').value;

               $.ajax({
                 url:'backend/edit_pnr.php',
                 method:'POST',
                 data:{
                    e_flight_no:flight_no,
                    e_depart_from:depart_from,
                    e_depar_date:depar_date,
                    e_arrive_to:arrive_to,
                    e_arrive_time:arrive_time,
                    e_duration:duration,
                    fiid:f_iid

                 },
                 success:function(resp){
                     if(resp == 200){

                      // rest of the code
                      $('#info_load_data').load('crm_ajax_add/view_flights.php');
                     $('#info_load').load('crm_ajax_add/flights.php');
                     $('#flight_pnr').load('crm_ajax_add/show_pnr.php');
                     $('#editModal').modal('hide');
                     swal("Changed", "Flight Pnr Information Changed", "success");  }
                     else {
                       console.log(resp);
                     }
                 }
               });
           }


         function editTransfers(){

          var vendor_name = document.getElementById('ed_vendor_name').value;
                var t_id =document.getElementById('tid').value;
                var c_pick_up_point = document.getElementById('ed_c_pick_up_point').value;

                var c_dropoff = document.getElementById('ed_c_dropoff').value;
               var pick_up_date_time = document.getElementById('ed_pick_up_date_time').value;
               var drop_off_date_time = document.getElementById('ed_drop_off_date_time').value;
               var transfer_type = document.getElementById('ed_transfer_type').value;

               var n_pass = document.getElementById('ed_n_pass').value;
               var v_type = document.getElementById('ed_v_type').value;

               var tr_desc = document.getElementById('ed_tr_desc').value;

               var b_ammount = document.getElementById('ed_b_ammount').value;
               var s_ammount = document.getElementById('ed_s_ammount').value;

               $.ajax({
                 url:'backend/edit_transfers.php',
                 method:'POST',
                 data:{
                  e_vendor_name:vendor_name,
                    e_c_pick_up_point:c_pick_up_point,
                    e_c_dropoff:c_dropoff,
                    e_pick_up_date_time:pick_up_date_time,
                    e_drop_off_date_time:drop_off_date_time,
                    e_transfer_type:transfer_type,
                    e_n_pass:n_pass,
                    e_v_type:v_type,
                    e_tr_desc:tr_desc,
                    e_b_ammount:b_ammount,
                    e_s_ammount:s_ammount,
                    tid:t_id

                 },
                 success:function(resp){
                     if(resp == 200){
                      document.getElementById('c_pick_up_point').value="";
                       document.getElementById('c_dropoff').value="";
                       document.getElementById('pick_up_date_time').value="";
                       document.getElementById('drop_off_date_time').value="";
                       document.getElementById('transfer_type').value="";
                       document.getElementById('n_pass').value="";
                       document.getElementById('v_type').value="";
                       document.getElementById('tr_desc').value="";
                       document.getElementById('b_ammount').value="";
                       document.getElementById('s_ammount').value="";
                      // rest of the code
                      $('#info_load_data').load('crm_ajax_add/view_transfers.php');
                     $('#info_load').load('crm_ajax_add/transfers.php');
                     $('#editModal').modal('hide');
                     swal("Changed", "Transfer Information Changed", "success");  }
                     else {
                       console.log(resp);
                     }
                 }
               });
           }


         function editHotels(){
          var h_id =document.getElementById('hid').value;
              var vendor_name = document.getElementById('ed_vendor_name').value;
               var c_hotel_name = document.getElementById('ed_c_hotel_name').value;
               var c_hotel_address = document.getElementById('ed_c_hotel_address').value;
               var check_in_date = document.getElementById('ed_check_in_date').value;
               var check_out_date = document.getElementById('ed_check_out_date').value;
               var c_room_type = document.getElementById('ed_c_room_type').value;
               var c_board_basis = document.getElementById('ed_c_board_basis').value;
               var b_ammount = document.getElementById('ed_b_ammount').value;
               var s_ammount = document.getElementById('ed_s_ammount').value;
               var free_c_deadline = document.getElementById('ed_free_c_deadline').value;

               $.ajax({
                 url:'backend/edit_hotels.php',
                 method:'POST',
                 data:{
                    e_vendor_name:vendor_name,
                    e_c_hotel_name:c_hotel_name,
                    e_c_hotel_address:c_hotel_address,
                    e_check_in_date:check_in_date,
                    e_check_out_date:check_out_date,
                    e_c_room_type:c_room_type,
                    e_c_board_basis:c_board_basis,
                    e_b_ammount:b_ammount,
                    e_e_s_ammount:s_ammount,
                    e_free_c_deadline:free_c_deadline,
                    hid:h_id

                 },
                 success:function(resp){
                     if(resp == 200){
                       document.getElementById('vendor_name').value="";
                       document.getElementById('c_hotel_name').value="";
                       document.getElementById('c_hotel_address').value="";
                       document.getElementById('check_in_date').value="";
                       document.getElementById('check_out_date').value="";
                       document.getElementById('c_room_type').value="";
                       document.getElementById('c_board_basis').value="";
                       document.getElementById('b_ammount').value="";
                       document.getElementById('s_ammount').value="";
                       document.getElementById('free_c_deadline').value="";
                      // rest of the code
                      $('#info_load_data').load('crm_ajax_add/view_hotels.php');
                     $('#info_load').load('crm_ajax_add/hotel_details.php');
                     $('#editModal').modal('hide');
                     swal("Changed", "Hotel Information Changed", "success");  }
                     else {
                       console.log(resp);
                     }
                 }
               });
           }



         function editFlights(){
           var vendor_name = document.getElementById('ed_vendor_name').value;
           var p_id =document.getElementById('pid').value;
             var c_f_name = document.getElementById('ed_f_c_f_name').value;
             var c_l_name = document.getElementById('ed_f_c_l_name').value;
             var c_ticket_number = document.getElementById('ed_f_c_ticket_number').value;
             var b_ammount = document.getElementById('ed_b_ammount').value;
             var s_ammount = document.getElementById('ed_s_ammount').value;
             var t_date = document.getElementById('ed_t_date').value;

             $.ajax({
               url:'backend/edit_flights.php',
               method:'POST',
               data:{
                e_vendor_name:vendor_name,
                  e_c_f_name:c_f_name,
                  e_c_l_name:c_l_name,
                  e_c_ticket_number:c_ticket_number,
                  e_b_ammount:b_ammount,
                  e_s_ammount:s_ammount,
                  e_t_date:t_date,
                  pid:p_id
               },
               success:function(resp){
                   if(resp == 200){
                    // rest of the code
                     $('#info_load_data').load('crm_ajax_add/view_flights.php');
                     $('#info_load').load('crm_ajax_add/flights.php');
                     $('#editModal').modal('hide');
                     swal("Changed", "Flight Passenger Information Changed", "success");
                   }
                   else if (resp == 9001) {
                     $('#info_load_data').load('crm_ajax_add/view_flights.php');
                     $('#info_load').load('crm_ajax_add/flights.php');
                     $('#editModal').modal('hide');
                     swal("Warning", "Their must be a lead passenger", "error");
                   }
                   else {
                     console.log(resp);
                   }
               }
             });
         }

         function addHotel(){
              var vendor_name = document.getElementById('vendor_name').value;
               var c_hotel_name = document.getElementById('c_hotel_name').value;
               var c_hotel_address = document.getElementById('c_hotel_address').value;
               var check_in_date = document.getElementById('check_in_date').value;
               var check_out_date = document.getElementById('check_out_date').value;
               var c_room_type = document.getElementById('c_room_type').value;
               var c_board_basis = document.getElementById('c_board_basis').value;
               var b_ammount = document.getElementById('b_ammount').value;
               var s_ammount = document.getElementById('s_ammount').value;
               var free_c_deadline = document.getElementById('free_c_deadline').value;

               $.ajax({
                 url:'backend/add_hotels.php',
                 method:'POST',
                 data:{
                    e_vendor_name:vendor_name,
                    e_c_hotel_name:c_hotel_name,
                    e_c_hotel_address:c_hotel_address,
                    e_check_in_date:check_in_date,
                    e_check_out_date:check_out_date,
                    e_c_room_type:c_room_type,
                    e_c_board_basis:c_board_basis,
                    e_b_ammount:b_ammount,
                    e_e_s_ammount:s_ammount,
                    e_free_c_deadline:free_c_deadline
                 },
                 success:function(resp){
                     if(resp == 200){
                       document.getElementById('vendor_name').value="";
                       document.getElementById('c_hotel_name').value="";
                       document.getElementById('c_hotel_address').value="";
                       document.getElementById('check_in_date').value="";
                       document.getElementById('check_out_date').value="";
                       document.getElementById('c_room_type').value="";
                       document.getElementById('c_board_basis').value="";
                       document.getElementById('b_ammount').value="";
                       document.getElementById('s_ammount').value="";
                       document.getElementById('free_c_deadline').value="";
                      // rest of the code
                       $('#info_load_data').load('crm_ajax_add/view_hotels.php');
                       $('#info_load').load('crm_ajax_add/hotel_details.php');
                      swal("Added", "Hotel Details Added", "success");
                     }
                     else {
                       console.log(resp);
                     }
                 }
               });
           }


           function addItenry(){
            var flight_no = document.getElementById('flight_no').value;
             var depart_from = document.getElementById('depart_from').value;
             var depar_date = document.getElementById('depar_date').value;
             var arrive_to = document.getElementById('arrive_to').value;
             var arrive_time = document.getElementById('arrive_time').value;
             var duration = document.getElementById('duration').value;
             var airline_code = document.getElementById('airline_code').value;

             if (!flight_no || !depart_from ||!depar_date || !arrive_to ||!arrive_time || !duration || !airline_code) {
              swal({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Please fill in all the required fields!',
              });
              return;
          }

             $.ajax({
               url:'backend/add_itenery.php',
               method:'POST',
               data:{
                  c_flight_no:flight_no,
                  c_depart_from:depart_from,
                  c_depar_date:depar_date,
                  c_arrive_to:arrive_to,
                  c_arrive_time:arrive_time,
                  c_duration:duration,
                  c_airline_code:airline_code
               },
               success:function(resp){
                   if(resp == 200){
                     document.getElementById('flight_no').value="";
                     document.getElementById('depart_from').value="";
                     document.getElementById('depar_date').value="";
                     document.getElementById('arrive_to').value="";
                     document.getElementById('arrive_time').value="";
                     document.getElementById('duration').value="";
                    // rest of the code
                    $('#info_load_data').load('crm_ajax_add/view_flights.php');
                    $('#info_load').load('crm_ajax_add/flights.php');
                    $('#flight_pnr').load('crm_ajax_add/show_pnr.php');
                    $('#editModal').modal('hide');
                    swal("Added", "Itenery Details Added", "success");
                   }
                   else {
                     console.log(resp);
                   }
               }
             });
         }

           function addTransfer(){
            var vendor_name = document.getElementById('vendor_name').value;
              var c_pick_up_point = document.getElementById('c_pick_up_point').value;
               var c_dropoff = document.getElementById('c_dropoff').value;
               var pick_up_date_time = document.getElementById('pick_up_date_time').value;
               var drop_off_date_time = document.getElementById('drop_off_date_time').value;
               var transfer_type = document.getElementById('transfer_type').value;
               var n_pass = document.getElementById('n_pass').value;
               var v_type = document.getElementById('v_type').value;
               var tr_desc = document.getElementById('tr_desc').value;
               var b_ammount = document.getElementById('b_ammount').value;
               var s_ammount = document.getElementById('s_ammount').value;

               $.ajax({
                 url:'backend/add_transfers.php',
                 method:'POST',
                 data:{
                  e_vendor_name:vendor_name,
                    e_c_pick_up_point:c_pick_up_point,
                    e_c_dropoff:c_dropoff,
                    e_pick_up_date_time:pick_up_date_time,
                    e_drop_off_date_time:drop_off_date_time,
                    e_transfer_type:transfer_type,
                    e_n_pass:n_pass,
                    e_v_type:v_type,
                    e_tr_desc:tr_desc,
                    e_b_ammount:b_ammount,
                    e_s_ammount:s_ammount
                 },
                 success:function(resp){
                     if(resp == 200){
                      document.getElementById('vendor_name').value="";
                       document.getElementById('c_pick_up_point').value="";
                       document.getElementById('c_dropoff').value="";
                       document.getElementById('pick_up_date_time').value="";
                       document.getElementById('drop_off_date_time').value="";
                       document.getElementById('transfer_type').value="";
                       document.getElementById('n_pass').value="";
                       document.getElementById('v_type').value="";
                       document.getElementById('tr_desc').value="";
                       document.getElementById('b_ammount').value="";
                       document.getElementById('s_ammount').value="";
                      // rest of the code
                       $('#info_load_data').load('crm_ajax_add/view_transfers.php');
                       $('#info_load').load('crm_ajax_add/transfers.php');
                      swal("Added", "Transfer Details Added", "success");
                     }
                     else {
                       console.log(resp);
                     }
                 }
               });
           }



         function addFlights(p_term){
          var vendor_name = document.getElementById('vendor_name').value;
             var title = document.getElementById('title').value;
             var fName_p = document.getElementById('fName_p').value;
             var lName_p = document.getElementById('lName_p').value;

             fName_p = title+" "+fName_p;

             var c_ticket_number = document.getElementById('f_c_ticket_number').value;
             var f_c_ticket_code = document.getElementById('f_c_ticket_code').value;
             var b_ammount = document.getElementById('b_ammount').value;
             var s_ammount = document.getElementById('s_ammount').value;
             var t_date = document.getElementById('t_date').value;



             if (p_term == 1) {
              // Validate c_ticket_number to be exactly 10 digits
              var ticketNumberPattern = /^\d{10}$/;
              if (!ticketNumberPattern.test(c_ticket_number)) {
                  swal({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'E-ticket Number must be exactly 10 digits and contain only numbers',
                  });
                  return; // Exit the function if the condition is met
              }
          }

               if(p_term == 1 && !c_ticket_number  || !t_date){
                 swal({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'E-ticket Number & Ticker Issues Date Required Since this invoice paid in full',
                 });
                 return;
               }


             if (!b_ammount || !s_ammount) {
                  swal({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Please fill in all the required fields!',
                  });
                  return;
              }
              c_ticket_number = f_c_ticket_code+"-"+c_ticket_number;
             $.ajax({
               url:'backend/add_flights.php',
               method:'POST',
               data:{
                  e_vendor_name:vendor_name,
                  e_fName_p:fName_p,
                  e_lName_p:lName_p,
                  e_c_ticket_number:c_ticket_number,
                  e_b_ammount:b_ammount,
                  e_s_ammount:s_ammount,
                  e_t_date:t_date
               },
               success:function(resp){
                   if(resp == 200){
                     document.getElementById('title').value="";
                     document.getElementById('fName_p').value="";
                     document.getElementById('lName_p').value="";
                    document.getElementById('vendor_name').value="";
                     document.getElementById('f_c_ticket_number').value="";
                     document.getElementById('b_ammount').value="";
                     document.getElementById('s_ammount').value="";
                     document.getElementById('t_date').value="";
                    // rest of the code
                     $('#info_load_data').load('crm_ajax_add/view_flights.php');
                     $('#info_load').load('crm_ajax_add/flights.php');
                     swal("Added", "Flight Passenger Information Added", "success");
                   }
                   else {
                     console.log(resp);
                   }
               }
             });
         }


         function addOtherCharge(){
          var vendor_name = document.getElementById('vendor_name').value;
           var other_c_name = document.getElementById('other_c_name').value;
           var other_charge_price = document.getElementById('other_charge_price').value;
           var other_charge_sell_price = document.getElementById('other_charge_sell_price').value;
           $.ajax({
             url:'backend/add_other_charges.php',
             method:'POST',
             data:{
              e_vendor_name:vendor_name,
               e_other_c_name:other_c_name,
               e_other_charge_price:other_charge_price,
               e_other_charge_sell_price:other_charge_sell_price
             },
             success:function(resp){
               if(resp == 200){
                document.getElementById('vendor_name').value="";
                 document.getElementById('other_c_name').value="";
                 document.getElementById('other_charge_price').value="";
                 document.getElementById('other_charge_sell_price').value="";
                 $('#info_load_data').load('crm_ajax_add/view_other_charges.php');
                 $('#info_load').load('crm_ajax_add/other_charges.php');
                 swal("Added", "Other Charges Added", "success");
                }
             }
           });
         }

         function delOtherCharge(id){
           if(confirm('Are you sure you want to delete other charge?')){
             $.ajax({
               url:'backend/del_other_charge.php',
               method:'POST',
               data:{
                 del_id:id
               },
               success:function(resp){
                 if(resp == 200){
                   $('#info_load_data').load('crm_ajax_add/view_other_charges.php');
                 }
               }
             });
           }
         }

         function save(s_status,b_id){
          var b_status=s_status;
          var b_id=b_id;
          $.ajax({
            url:'backend/change_status.php',
            method:'POST',
            data:{
              c_b_status:b_status,
              c_b_id:b_id
            },
            success:function(resp){
              if(resp == 200){

                $('#save_draft_button').load('crm_ajax/invoice_save_draft.php',{ b_id:b_id });
                $('#info_load_data').load('crm_ajax_add/view_flights.php');
                $('#info_load').load('crm_ajax_add/flights.php');
                $('#flight_pnr').load('crm_ajax_add/show_pnr.php');
                swal("Saved", "Passenger saved", "success");
               }
            }
          });

       }

       function draft(s_status,b_id){
        var b_status=s_status;
        var b_id=b_id;
        $.ajax({
          url:'backend/change_status.php',
          method:'POST',
          data:{
            c_b_status:b_status,
            c_b_id:b_id
          },
          success:function(resp){
            if(resp == 200){
              $('#save_draft_button').load('crm_ajax/invoice_save_draft.php',{ b_id:b_id });
              $('#info_load_data').load('crm_ajax_add/view_flights.php');
              $('#info_load').load('crm_ajax_add/flights.php');
              $('#flight_pnr').load('crm_ajax_add/show_pnr.php');
              swal("Saved", "Passenger saved", "success");
             }
          }
        });

     }


           function flights() {
            $('#info_load').load('crm_ajax_add/flights.php');
            $('#info_load_data').load('crm_ajax_add/view_flights.php');
            $('#flight_pnr').load('crm_ajax_add/show_pnr.php');
           }

           function hotels() {
            $('#info_load').load('crm_ajax_add/hotel_details.php');
            $('#info_load_data').load('crm_ajax_add/view_hotels.php');
            $('#flight_pnr').empty();
           }

           function tours() {
            $('#info_load').load('crm_ajax_add/transfers.php');
            $('#info_load_data').load('crm_ajax_add/view_transfers.php');
            $('#flight_pnr').empty();
           }
           function other() {
            $('#info_load').load('crm_ajax_add/other_charge.php');
            $('#info_load_data').load('crm_ajax_add/view_other_charges.php');
            $('#flight_pnr').empty();
           }
