 <link rel="stylesheet" href="{{ asset('assets/styles/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/styles/css/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/styles/css/lflusa.css') }}">



<!-- Bootstrap 4.6 CSS
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 -->
<!-- Optional icons (Font Awesome)
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
 -->
<!--  ============ Toast Styles  =============  -->
<style>
    /* Toast area (top-right) */
    #toastArea {
        position: fixed;
        top: 1rem;
        right: 1rem;
        z-index: 1080;             /* above navbar/modals */
        display: grid;
        grid-auto-rows: min-content;
        grid-row-gap: .5rem;
    }

    /* Toast look & feel */
    .toast {
        min-width: 280px;
        overflow: hidden;
        border: 0;
        border-radius: .75rem;
        box-shadow: 0 8px 24px rgba(0,0,0,.12);
    }
    .toast .toast-header {
        color: #fff;
        border: 0;
        font-weight: 600;
    }
    .toast .toast-body {
        font-size: .95rem;
    }

    /* Color variants */
    .toast-primary   .toast-header { background: linear-gradient(135deg,#6f42c1,#007bff); }
    .toast-success   .toast-header { background: linear-gradient(135deg,#28a745,#20c997); }
    .toast-info      .toast-header { background: linear-gradient(135deg,#17a2b8,#00bcd4); }
    .toast-warning   .toast-header { background: linear-gradient(135deg,#ffc107,#ff9800); color:#212529; }
    .toast-danger    .toast-header { background: linear-gradient(135deg,#dc3545,#ff4d6d); }

    /* Slim close button on colored headers */
    .toast .close {
        color: inherit;
        text-shadow: none;
        opacity: .85;
    }
    .toast .close:hover { opacity: 1; }

    .test {
        font-family: "iconfont";
        content: "\f095";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
        font-weight:900;
    }
</style>

