<style>
    header, #mainHeader {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
    }

    #bgImage {
        position: absolute;
        left: 0px;
        top: 0px;
        z-index: -1;
        height: 13rem;
        padding: 0px;
    }

    #headerImage {
        padding-left: 5rem;
        margin-left: 5rem;
    }
    #headerImage img {
        width: 10rem;
        height: 9rem;
        /* padding-left: 5rem; */
    }
    header {
        background-image: linear-gradient(to right, #152e3b 10%, #1B4061 20%, #224b77);
        color: white;
    }
    header ul li a {
        color: white;
    }
    span:hover {
        color: #50d3c6;
    }
    a:active {
        background-color: white;
    }
    .dropdown-menu {
        background-color: #46aba0;
    }
    .dropdown-menu span:hover {
        color: #152e3b;
    }
    .dropdown-menu a:hover {
        background-color: transparent;
    }
    #headerDesc {
        margin-left: 5rem;
        margin-right: 5rem;
        padding-left: 2rem;
        padding-right: 2rem;
        font-size: 1rem;
        font-style: italic;
        color: #fff;
        width: 45rem;
    }
    #headerBtn p {
        font-size: 1.1rem;
        color: #fff;
    }
    #headerBtn {
        padding-left: 3rem;
        padding-right: 5rem;
    }
    #logoutBtn, #headerBtn button {
        background-color: #50d3c6;
        color: #fff;
        border: #50d3c6 2px solid;
        padding: 0.5rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        border-radius: 3px;
    }

    #burgerLine {
        color: #fff;
        font-size: 30px;
        font-weight: 900;
    }
    .navbar-toggler {
        border: #fff 1px solid;
    }
    /* .navbar-toggler-icon {
        color: #fff;
    } */

</style>
