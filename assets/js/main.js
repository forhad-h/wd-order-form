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
    if (!isRadioValid()) return false

    $('#firstStep').hide()
    $('#secondStep').show()
  })

  $('.item_list input[type=radio]').on('change', function() {

    // set the values in the last step
    var item_value = $(this).val().split(',')
    $("#displayItemLabel").text(item_value[0] + " " + item_value[1])
    $('#totalPrice').text(item_value[2])

    // generate start and end date fields
    var singleMarkup = ''
    var item_amount = item_value[0].split(' ')[0]

    for (var i = 0; i < Number(item_amount); i++) {
      singleMarkup += makeStartEnd(i + 1)
    }
    $('#startEndDate').html('')
    $('#startEndDate').append(singleMarkup)
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

    if (!isRadioValid()) return false

    $('#secondStep').hide()
    $('#thirdStep').show()
  })

  $('.type_list input[type=radio]').on('change', function() {

    // display value in last step
    $('#displayProductType').text($(this).val())

    // get form type
    var formType = $('#formType').val()

    var product_list_index = $(this).attr('data-product-ref')
    // request for product list
    $.ajax({
      method: 'GET',
      url: wdForm.ajaxurl + '?action=get_product_list&index=' + product_list_index + '&form_type=' + formType,
      success: function(res) {

        var listItems = ''
        var response = JSON.parse(res)
        var pluginUrl = response.plugin_url
        var product_list = response.product_list

        $.each(product_list, function(index) {
          listItems += makeProductList(pluginUrl, index, product_list[index])
        })

        $('#bankList').html('')
        $('#bankList').append(listItems)
      }
    })
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
      $('.product_image_wrapper img').addClass('has_error')
      return false
    }
    $('#thirdStep').hide()
    $('#lastStep').show()
  })

  // manage select option box
  $('#bankList').on('click', '.single_product .product_image_wrapper', function(e) {
    e.preventDefault()

    $('.single_product .product_image_wrapper').find('.option_box').hide()
    $(this).find('.option_box').show()


    $('#wdProductName').val($(this).find('h4').text())
    $('#wdBankImageUrl').val($(this).find('img').attr('src'))

    $('.product_image_wrapper img').removeClass('has_error')
    $('.product_image_wrapper').removeClass('selected')
    $(this).addClass('selected')

    // display value in last step
    $('#displayProductName').text($('#wdProductName').val())
    $('#displayProductImage').attr('src', $('#wdBankImageUrl').val())

  })
  $('#isSameAddress').on('change', function() {
    if (!$(this).prop('checked')) {
      $('#deliveryAdress').show()
    } else {
      $('#deliveryAdress').hide()
    }
  })

  $('.product_image_wrapper').on

  /*
     In last step
  */

  $('#backStep3Btn').on('click', function(e) {
    e.preventDefault()
    $('#lastStep').hide()
    $('#thirdStep').show()
  })




  /*
     remove error effect
  */
  $('.statement_list input[type=radio]').on('change', function() {
    $('.statement_list .check').css('border-width', '2px')
  })


  // Radio validation
  function isRadioValid() {
    // error effect when no option selected
    if (!$('.radio_btn_required input[type=radio]').is(':checked')) {
      $('.radio_btn_required .check').css('border-width', '1px')
      return false
    }
    return true
  }

  // Make bank list for third step
  function makeProductList(pluginUrl, parentIndex, product) {
    var listItem = '<li class="single_product">'
    listItem += '<div class="zoom_thumb">'
    listItem += '<a href="#"><i class="fa fa-search"></i></a>'
    listItem += ' </div>'

    listItem += ' <div>'
    listItem += '<div class="product_image_wrapper">'

    // product image
    listItem += '<img src="' + pluginUrl + '/assets/img/' + product.image_name + '" alt="' + product.label + '" title="' + product.label + ' Bank Statement" border="0"/>'

    // select options
    listItem += '<div class="option_box">'

    if (product.selection1) {
      var options = product.selection1.options
      // options
      listItem += '<div class="statement_list">'
      listItem += '<ul>'

      $.each(options, function(childIndex) {
        var idName = options[childIndex] + parentIndex + childIndex
        listItem += '<li>'
        listItem += '<input type="radio" id="' + idName + '" name="product_type" data-product-ref="' + parentIndex + childIndex + '">'
        listItem += '<label for="' + idName + '">' + options[childIndex] + '</label>'
        listItem += '<div class="check check_part2" style="border-width: 2px;"></div>'
        listItem += '</li>'
      })


      listItem += '</ul>'
      listItem += '</div>'
    }

    // next prev buttton
    listItem += '<a href="#" class="btn btn-black text-uppercase btn-lg goBack2 back_step_2_btn">Go Back</a>'
    listItem += '<a href="#" class="btn btn-danger text-uppercase btn-lg bankStatement2 next_step_4_btn">Next Step</a>'

    listItem += '</div>'

    listItem += '</div>'
    listItem += '<h4>' + product.label + '</h4>'
    listItem += '</div>'
    listItem += '</li>'
    return listItem
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