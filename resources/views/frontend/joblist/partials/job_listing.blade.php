<div class="row pt-45 pe-3 position-relative direction_change">
    @foreach($jobs as $jobList )
    <x-joblist_card :title="$jobList->title"></x-joblist_card>
    @endforeach
    <x-joblist_card_details :title="$jobList->title"></x-joblist_card_details>
</div>
@section('joblisting-script')
<script>
    function apply() {
        // swal.fire("Good job!", "Your job is successfully applied", "success");
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2200,
            timerProgressBar: true,
            showClass: {
                popup: 'animate__animated animate__bounceInRight'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOut'

            },
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Your job is successfuly applied!'
        })
    }

    $(".page-item:first-child .page-link").html("<i class='fas fa-chevron-left text-warning' aria-hidden='true'></i>");
    $(".page-item:last-child .page-link").html("<i class='fas fa-chevron-right text-warning' aria-hidden='true'></i>");

    $('.high').click(function() {
        $('.high').removeClass("job_list_border");
        $(this).addClass("job_list_border");
    });
    $('.col_size_change').click(function() {
        $(this).insertBefore('.col_size_change:nth-child(1)')
    });

    $(".bookmark-btn").click(function() {
        if ($(".fa-heart", this).hasClass("red")) {
            $(".fa-heart", this).removeClass("red");

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2200,
                timerProgressBar: true,
                showClass: {
                    popup: 'animate__animated animate__bounceInRight'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOut'

                },
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'You have Unsaved your job'
            })
        } else {
            $(".fa-heart", this).addClass("red");
            // swal.fire("Good job!", "Your job has been saved", "success");
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2200,
                timerProgressBar: true,
                showClass: {
                    popup: 'animate__animated animate__bounceInRight'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOut'

                },
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Your Job has been successfully saved'
            })
        }
    });

    // job show right side
    $('.job_details_show').click(function() {
        $(".direction_change").css({
            display: 'block',
        });
        $(".direction_change").addClass('d-none d-lg-block');
        $('.col_size_change').removeClass('col-lg-6').addClass('col-lg-5');
        $('.job_show').css("display", "block");
    });
</script>
@endsection