!(function($) {
  /*
    Date Picker
  */
  $('body').on('focus', '.datepicker', function() {
    $(this).pickadate({
      selectYears: true,
      selectMonths: true
    })
  })

  /*
    Popover
  */
  $('[data-toggle="popover"]').popover({
    placement: 'top',
    trigger: 'hover'
  })

  /*
    In first step
  */
  $('#nextStep2Btn').on('click', function(e) {
    e.preventDefault()

    if ($('#0-Other').prop('checked')) {
      window.location = wdForm.contactUsPageUrl
      return false
    }
    if (!isRadioValid('.item_list')) return false

    $('#firstStep').hide()
    $('#secondStep').show()
  })

  $('.item_list input[type=radio]').on('change', function() {

    // set the values in the last step
    var item_value = $(this).val().split(',')
    $("#displayItemLabel").text(item_value[0] + " " + item_value[1])
    $('#totalPrice').text(item_value[2])

    // generate start and end date fields
    var singleMarkups = ''
    var item_amount = item_value[0].split(' ')[0]

    for (var i = 0; i < Number(item_amount); i++) {
      singleMarkups += makeStartEnd(i + 1)
    }
    $('#startEndDate').html('')
    $('#startEndDate').append(singleMarkups)
  })

  /*
    In second step
  */
  $('#backStep1Btn').on('click', function(e) {
    e.preventDefault()
    $('#secondStep').hide()
    $('#firstStep').show()
  })
  $('#nextStep3Btn').on('click', function(e) {
    e.preventDefault()

    if (!isRadioValid('.type_list')) return false

    $('#secondStep').hide()
    $('#thirdStep').show()
  })

  $('.type_list input[type=radio]').on('change', function() {
    // get form type
    var formType = $('#formType').val()

    var product_list_index = $(this).attr('data-product-ref')

    $('.wd_product_list').hide()
    $("#productList" + product_list_index).show()

  })

  /*
    In third step
  */
  $('.back_step_2_btn').on('click', function(e) {
    e.preventDefault()
    $('#thirdStep').hide()
    $('#secondStep').show()
  })
  $('.next_step_4_btn').on('click', function(e) {
    e.preventDefault()
    if (!$('#wdProductName').val()) {
      $('.wd_product_image_wrapper img').addClass('has_error')
      return false
    }

    if ($('#wdHasSelection1').val() === 'true' && !$('#wdProductType').val()) {
      $('#wdAccountTypeAlert').modal()
      return false
    }
    $('#thirdStep').hide()
    $('#lastStep').show()
  })

  // manage select option box
  $('.wd_product_image_wrapper').on('click', function(e) {
    e.preventDefault()

    $('.wd_option_box').hide()
    $(this).next('.wd_option_box').show()

    if ($(this).hasClass('hasSelection1')) {
      // if has selection option
      $('#wdHasSelection1').val(true)
    } else {
      // for no selection option
      $('#wdHasSelection1').val(false)
      $('#displayProductType').text('')
      $('#wdProductType').val('')
    }

    $('#wdProductName').val('')
    $('#wdProductName').val($(this).parent().find('h4').text())
    $('#wdBankImageUrl').val($(this).find('img').attr('src'))

    // display value in last step
    $('#displayProductName').text($('#wdProductName').val())
    $('#displayProductImage').attr('src', $('#wdBankImageUrl').val())
    $('.wd_product_image_wrapper img').removeClass('has_error')
    $('.wd_product_image_wrapper').removeClass('selected')
    $(this).addClass('selected')

  })

  $('.wd_product_type').on('change', function() {
    // display value in last step
    $('#displayProductType').text($(this).val())
    $('#wdProductType').val($(this).val())
  })

  /*
     In last step
  */

  $('#backStep3Btn').on('click', function(e) {
    e.preventDefault()
    $('#lastStep').hide()
    $('#thirdStep').show()
  })

  $('#isSameAddress').on('change', function() {
    if (!$(this).prop('checked')) {
      $('#deliveryAdress').show()
    } else {
      $('#deliveryAdress').hide()
    }
  })

  /*
     remove error effect
  */
  $('.statement_list input[type=radio]').on('change', function() {
    $('.statement_list .check').css('border-width', '2px')
  })


  // Radio validation
  function isRadioValid(targetElmClass) {
    // error effect when no option selected
    if (!$('.radio_btn_required' + targetElmClass + ' input[type=radio]').is(':checked')) {
      $('.radio_btn_required' + targetElmClass + ' .check').css('border-width', '1px')
      return false
    }
    return true
  }

  // Make start and end date field in last step
  function makeStartEnd(index) {
    var item = '<div class="row" id="first">'
    item += '<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">'
    item += '<label for="text">Statement ' + index + ' Starting Date</label>'
    item += '<div class="calendar_icon_input">'
    item += '<input type="text" size="32" name="startDate[]" class="showcal form-control datepicker" />'
    item += '</div>'
    item += '</div>'
    item += '<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">'
    item += '<label for="text">Statement ' + index + ' Closing Date</label>'
    item += '<div class="calendar_icon_input">'
    item += '<input type="text" size="32" name="endDate[]" class="showcalend datepicker form-control" />'
    item += '</div>'
    item += '</div>'
    item += '</div>'

    return item
  }


  // // Manage form type
  // var urlParams = new URLSearchParams(window.location.search)
  // var formType = urlParams.get('wd_form_type')


})(jQuery)