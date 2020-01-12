!(function($) {
  // get form type
  var urlParams = new URL(window.location.href)
  var formType = urlParams.searchParams.get('form_type')
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
      Common
  */

  /* In first step */
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
    $('#wdSelectableAmount').val(item_value[0])

    // generate start and end date fields
    var singleMarkups = ''
    var item_amount = item_value[0].split(' ')[0]

    for (var i = 0; i < Number(item_amount); i++) {
      singleMarkups += makeStartEnd(i + 1)
    }
    $('#startEndDate').html('')
    $('#startEndDate').append(singleMarkups)
  })

  /* In second step */
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


  /* In third step */
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

    if (formType === 'bank_statements') {
      if ($('#wdHasSelection1').val() === 'true' && !$('#wdProductType').val()) {
        $('#wdAccountTypeAlert').modal()
        return false
      }
    }

    // show conditional fields with corresponding title
    if (formType === 'utility_bills') {
      if ($('#wdSelectedProducts').length) {
        var totalItems = 0
        var titleArr = ['']
        $('#wdSelectedProducts').find('input').each(function(index, elm) {
          var value = $(this).val().split(',')
          totalItems += parseInt(value[0])

          for (var j = 1; j <= value[0]; j++) {
            titleArr.push(value[1])
          }
        })

        $('.wd_conditional_single_field').slice(totalItems).remove()

        for (var i = 1; i <= totalItems; i++) {
          $('.wd_conditional_field_' + i).find('.wd_cond_title').text(titleArr[i])
          $('.wd_conditional_field_' + i).find('.wd_cond_title_field').val(
            $('.wd_conditional_field_' + i).find('.wd_cond_title_field').val() + " " + titleArr[i]
          )

        }

      }
    }

    if (formType === 'payslips') {
      var totalItems = parseInt($('#wdSelectableAmount').val())
      $('.wd_conditional_single_field').slice(totalItems).remove()
    }


    $('#thirdStep').hide()
    $('#lastStep').show()
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
   bank_statements
  */

  // manage select option box
  $('.wd_product_image_wrapper').on('click', function(e) {
    e.preventDefault()

    $('.wd_option_box').hide()

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


    $('.wd_product_image_wrapper').not('.wd_has_value').removeClass('selected')

    if (!$(this).hasClass('wd_has_value')) {
      // select process
      $(this).addClass('selected')
      $(this).next('.wd_option_box').show()
    } else {
      // deselect process

      var ref = $(this).next('.wd_option_box').find('.wd_product_option').attr('data-product-ref')
      var selectedAmount = parseInt($('#wdSelectedAmount').val())
      var decreaseAmount = parseInt($(this).find('.wd_selected_product_amount').text())

      $(this).find('.next_step_4_btn').hide()
      $(this).next('.wd_option_box').find('.next_step_4_btn').hide()

      // remove generated input element from product selection
      $('#wdSelectedProducts').find("#wdSelectedProduct" + ref).remove()
      if (selectedAmount > 0) {
        $('#wdSelectedAmount').val(selectedAmount - decreaseAmount)
      }

      $(this).next('.wd_option_box').find('.wd_product_option').prop('checked', false)
      $(this).find('.wd_selected_product_amount').text('')
      $(this).removeClass('wd_has_value')
      $(this).removeClass('selected')
    }

  })

  $('.wdob_bank_statements .wd_selection1 .wd_product_option').on('change', function() {
    // display value in last step
    $('#displayProductType').text($(this).val())
    $('#wdProductType').val($(this).val())
  })



  /*
     remove error effect
  */
  $('.statement_list input[type=radio]').on('change', function() {
    $('.statement_list .check').css('border-width', '2px')
  })

  /*
    utility_bills
  */
  $('.wdob_utility_bills .wd_selection1 li').hide()

  $('.wdpl_utility_bills').on('click', function() {
    var selectableAmount = +$('#wdSelectableAmount').val()
    $(this)
      .next('.wdob_utility_bills')
      .find('.wd_selection1 li')
      .slice(0, selectableAmount)
      .show();
  })

  $('.wdob_utility_bills .wd_selection1 .wd_product_option').on('change', function() {
    // get reference number
    var ref = $(this).attr('data-product-ref')
    var title = $(this).parents('.wd_option_box').next('h4').text()
    var selectableAmount = parseInt($('#wdSelectableAmount').val())
    var currentVal = parseInt($(this).val())
    var selectedAmount = parseInt($('#wdSelectedAmount').val())


    $('#displaySelectableAmount').text(selectableAmount) // update amount in modal

    $('.wdp_ref_' + ref).text($(this).val()) // update UI


    if (selectableAmount < (selectedAmount + currentVal)) {
      $('#maxSelectionAlert').modal()
      $(this).prop('checked', false)
      $(this).parents('.wd_option_box').prev('.wd_product_image_wrapper').find('.wd_selected_product_amount').text('')
      $(this).parents('.wd_option_box').prev('.wd_product_image_wrapper').find('.wd_selected_product_amount').hide()
      return false
    }


    $('#wdSelectedProducts')
      .append('<input type="hidden" id="wdSelectedProduct' + ref + '" name="selected_product[]" value="' + currentVal + "," + title + '" />')
    $('#wdSelectedAmount').val(selectedAmount + currentVal)

    $(this).parents('.wd_option_box').prev('.wd_product_image_wrapper').addClass('wd_has_value')

    $(this).parents('.wd_option_box').hide()

    // hide or show next step button
    if (selectableAmount === (selectedAmount + currentVal)) {
      $('.ts_utility_bills').find('.next_step_4_btn').show()
    } else {
      $('.ts_utility_bills').find('.next_step_4_btn').hide()
    }

  })


  /*
     Necessary functions
  */


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

})(jQuery)