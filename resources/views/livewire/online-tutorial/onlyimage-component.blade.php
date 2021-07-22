<div>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }    
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #070c15;
    }
    .imgBox {
        position: relative;
        width: 442px;
        height: 500px;
    }
    .imgBox textarea {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        max-width: 100%;
        height: 100%;
        background: url(../../assets/img/galeria/capitana/captain2.png);
        resize: none;
        outline: none;
        border: none;
        opacity: 0.4;
        filter: grayscale(1);
    }
    .imgBox textarea:nth-child(2) {
        opacity: 1;
        filter: grayscale(0);
        width: 150px;
        border-right: 2px solid #fff;
        resize: horizontal;
    }
    .title {
        color: #fff;
        text-align: center;
        
    }
    </style>

    <div class="imgBox">
        <textarea readonly></textarea>
        <textarea readonly></textarea>
    </div>
    <h2 class="title">Deslice la barra</h2>
</div>
