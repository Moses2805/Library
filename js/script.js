
// Elde olunan vacib klaslar


let show_popup = document.querySelector('.show_popup');
let modal_bg = document.querySelector('.modal-bg');
let delete_popup = document.querySelector('.delete');
let showed_sort = document.querySelector('.showed_sort');
let sort = document.querySelector('.sort');


// Popup-in acilmasi


show_popup.addEventListener('click', function () {
    modal_bg.classList.remove('bg_nonactive')
    modal_bg.classList.add('bg_active')
    modal_bg.style.transition = 'all 0.6s'
    console.log(modal_bg)
});

// Popup-in baglanmasi

delete_popup.addEventListener('click', function () {
    modal_bg.classList.remove('bg_active')
    modal_bg.classList.add('bg_nonactive')

});


// Sort hisseye kliklenende bas veren emeliyyatlar


sort.addEventListener('click', function () {

    if (showed_sort.parentElement.className == 'bg_nonactive') {

        showed_sort.parentElement.classList.replace('bg_nonactive', 'bg_active')

        showed_sort.parentElement.previousElementSibling.children[0].style.color = 'white'

        showed_sort.parentElement.previousElementSibling.style.backgroundColor = 'black'

        showed_sort.parentElement.previousElementSibling.style.transition = 'all 0.7s'

        showed_sort.parentElement.previousElementSibling.children[1].src = 'img/white_filter.svg'


    } else {

        showed_sort.parentElement.classList.replace('bg_active', 'bg_nonactive')

        showed_sort.parentElement.previousElementSibling.style.transition = 'all 0.7s'

        showed_sort.parentElement.previousElementSibling.children[0].style.color = '#616875'
        showed_sort.parentElement.previousElementSibling.style.backgroundColor = '#f8f8fa'
        showed_sort.parentElement.previousElementSibling.children[1].src = 'img/icons8-filter (4) 1.svg'



    }

    console.log(showed_sort.parentElement.className)
})


// Tags hissesinde lazim olacaq klasslarin alinmasi

let tags = document.querySelector('.tags');
let tags_modal_bg = document.querySelector('.tags_modal_bg');
let tags_delete = document.querySelector('.tags_delete');


// Tags hissesi uzerinde aparilan emeliyyatlar

tags.addEventListener('click', function () {
    tags_modal_bg.classList.remove('bg_nonactive')
    tags_modal_bg.classList.add('bg_active')
    tags_modal_bg.style.transition = 'all 0.6s'

});

tags_delete.addEventListener('click', function () {
    tags_modal_bg.classList.remove('bg_active')
    tags_modal_bg.classList.add('bg_nonactive')
});


// Card headerde acilan div ucun lazim olan klasslar

let for_more = document.querySelectorAll('.for_more')
let card_events = document.querySelectorAll('.card_events')



// Card header hissesin acilan divin emeliyyatlari


for (var i = 0; i < for_more.length; i++) {

    for_more[i].addEventListener('click', function () {


        this.nextElementSibling.classList.toggle('bg_active')

        if (this.nextElementSibling.className == 'bg_nonactive') {

            this.src = 'img/Group 7873.svg';

        } else {
            this.src = 'img/black_click.svg';


        }

    })

}

// Ekranin her hansi bir yerine kliklenende divin baglanmasi

window.addEventListener('click', function (e) {

    for (var j = 0; j < card_events.length; j++) {

        if (e.target.id != 'dropdown' && e.target.parentElement.id != 'dropdown' && e.target.className != 'for_more') {
            if (card_events[j].parentElement.className != 'bg_nonactive') {

                card_events[j].parentElement.classList.remove('bg_active')
                card_events[j].parentElement.classList.add('bg_nonactive');


            }


            if (card_events[j].parentElement.className == 'bg_nonactive') {
                card_events[j].parentElement.previousElementSibling.src = 'img/Group 7873.svg';

            } else {
                card_events[j].parentElement.previousElementSibling.src = 'img/black_click.svg';

            }
        }

    }

})

// Search hissesi ucun lazim olan klasslar

let search_anything = document.querySelector('#search_anything')
let my_tags = document.querySelector('.my_tags')
let cancel = document.querySelector('#cancel');


// Search hissesi ucun lazim olan emeliyyatlar


search_anything.addEventListener('keyup', function (e) {

    if (e.target.value.length > 0) {
        my_tags.innerText = e.target.value;
        my_tags.style.color = '#2D59F4'
        search_anything.nextElementSibling.classList.replace('bg_nonactive', 'bg_active')


    } else {
        search_anything.nextElementSibling.classList.replace('bg_active', 'bg_nonactive')

        my_tags.innerText = 'Tags'
        my_tags.style.color = '#616875'
    }



    if (e.target.value.length > 0) {
        my_tags.nextElementSibling.src = 'img/icons8-cancel (8) 1.svg';
    } else {
        my_tags.nextElementSibling.src = 'img/icons8-tags 2.svg'
    }

    if (my_tags.innerHTML.length >= 9) {
        my_tags.parentElement.style.wordWrap = 'break-word'
            my_tags.style.top = '10%'

    }

})



// Dropzone

let dropzone = document.querySelector('.dropzone');
let error_file = document.querySelector('.error_file');



(function () {


    ondragover = () => {

        dropzone.className = 'dropzone dragover'
        return false;

    }

    ondragleave = () => {
        dropzone.className = 'dropzone'
        return false;
    }


    ondrop = (e) => {
        e.preventDefault();
        dropzone.className = 'dropzone'
        var form_data = new FormData();

        var success_file = document.querySelector('.success_file')


        console.log(e.dataTransfer.files[0].type)

        if (e.dataTransfer.files[0].type != 'application/pdf') {

            error_file.children[0].classList.replace('hidden_element', 'showed_element')
            success_file.children[0].classList.replace('showed_element', 'hidden_element')

        } else {
            error_file.children[0].classList.replace('showed_element', 'hidden_element')
            success_file.children[0].classList.replace('hidden_element', 'showed_element')

            const progressBar = document.getElementsByClassName('progress_bar')[0]
            const precent = document.querySelector('.precent')

            progressBar.style.setProperty('--width', 0)


            setInterval(() => {
                const computedStyle = getComputedStyle(progressBar)
                const width = parseFloat(computedStyle.getPropertyValue('--width')) || 0

                if(width < 100) {
                    progressBar.style.setProperty('--width', width + .5)
                    precent.innerHTML = width.toFixed(0) + "%"

                    
                }



            }, 5)
            


            {
                // form_data.append("file", document.getElementById('file').files[0]);
                $.ajax({
                    url: "upload.php",
                    method: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
                    },
                    success: function (data) {
                        $('#uploaded_image').html(data);
                    }
                });
            }
        }

    }
}())


// ____________________________________________________________________________




