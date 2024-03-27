const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 2200,
    timerProgressBar: true,
    showClass: {
        popup: "animate__animated animate__bounceInRight",
    },
    hideClass: {
        popup: "animate__animated animate__fadeOut",
    },
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});

Toast.fire({
    icon: "success",
    title: "you have unsaved your job!",
});
