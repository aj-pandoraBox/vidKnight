<style>

    
    /*-----------------------   home-left styles  ---------------------*/
 
              /*testing new home design css*/
    
    
    
    /*----------------------------------start------------------------------------------*/

    
    
    
    
    
    
    
    
    
    
     body{
/*        background-color: #2b2c2c;*/
        background-color: #1a1a1a;
    }
    
    html{
/*                background-color: #2b2c2c;*/
                background-color: #1a1a1a;

    }
    
    

/*content box    */
    
    
    .contain-the-box{
        box-sizing: border-box;
        width: 94%;
        margin: 2.5vh auto;
        height: 95vh;
        border-radius: 5px;
    box-shadow: 13px 15px 26px rgba(0,0,0,0.6),13px 15px 11px rgba(0,0,0,0.4);

    }

    .left-contain-home-box{
        width: 20%;
        float: left;
        height: 100%;
        background-color: rgba(55, 54 ,56,0.8);
        position: relative;
    }
    
    
/*    left search and nav*/
    
    .close-logout{
        color: #FF5A52;
        position: absolute;
        top:2%;
        left: 5%;
        cursor: pointer;
        font-size: 22px;

         
    }
    
    
    .expand-screen-logo{
        color: #52C22B;
        position: absolute;
        top:2%;
        left: 16%;
        cursor: pointer;
        font-size: 22px;

         
    }
    
     .input-search-item{
            margin-top: 60px;
            border: none;
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.22);
            box-sizing: border-box;
            padding-top: 4px;
            padding-bottom: 6px;
            font-size: 16px;
            font-weight: 300;
            color: #fff;
            padding-left: 20px;
            padding-right: 20px;
            border: 1px solid rgba(62, 62, 62, 0.74);
        }

    
        
     .input-search-item::placeholder{
           
            padding-bottom:  50px;
         font-size: 14px;
         font-weight: 300;
         text-align: center;
         color: rgba(255, 255, 255, 0.42);
        }
        
        
        .left-contain-home-box nav{
            
            color: #a5a5a5;
            
            padding-left:10%;
            margin-top: 25%;
        }    
        
        
        .left-contain-home-box nav li{
            margin-bottom: 22px;
            cursor: pointer;
            font-size: 20px;
            position: relative;
            padding-left: 35px;
            
        }
        
        .left-contain-home-box nav li .ic-nav{
            position: absolute;
            margin-right: 10px;
            margin-top: 15px;
            top: -57%;
            left: 0%;
        
            
        }
        
        .selected-nav-li{
        color: #fff;
            font-weight: 600;
        }
    
    
    
/*    right box    */
    
    
    .right-contain-home-box{
        width: 80%;
        height: 100%;
        float: right;
        background-color: #242324;

    }
     

    
    
    .right-contain-home-box-elements{
        margin-left: 40px;
        
    }
    
    .right-contain-home-box-elements h2{
       color: #fff;
        font-size: 30px;
        font-weight: 600;
        padding-bottom: 20px;
        margin-top: 5%;
        border-bottom: 1px solid #393939;
        width: 95%;
    }
    
    .suggestion-div-box-home-container{
        white-space: nowrap;
        overflow-y: hidden;
        overflow-x: auto;
        width: 95%;
    }
    
    
       .suggestion-div-box-home-container::-webkit-scrollbar { width: 0 !important }
    .suggestion-div-box-home-container { overflow: -moz-scrollbars-none; }
 .suggestion-div-box-home-container::-webkit-scrollbar { width: 0 !important }
    .suggestion-div-box-home-container{ overflow: -moz-scrollbars-none; }
    
    .suggestion-div-box-home{
        width: 47%;
        margin-top: 30px;
        display: inline-flex;
        flex-direction: column;
        margin-right: 20px;
        
        
    }
    
    
    
    
    .suggestion-div-box-home-element{
        width: 100%;
        margin-top: 30px;
    }
    
    .suggestion-div-box-home-element h6{
        font-size: 13px;
        color: #0B84FF;
        font-weight: 900;
        cursor: pointer;

        
    }
    .suggestion-div-box-home-element h4{
        margin-top: 12px;
        font-size: 18px;
        color: #DEDDDE;
        font-weight: 400;
        cursor: pointer;


        
    }
    .suggestion-div-box-home-element p{
        margin-top: 12px;
        font-size: 15.5px;
        font-weight: 400;
        color: #5A595A;
        white-space: pre-line;
    }
    
    
    .suggestion-div-box-home-element img{
        width: 100%;
        margin-top: 12px;
        height: 300px;
        border-radius: 6px;
        cursor: pointer;
        object-fit: cover;

    }
    
    
    
/*    cat box*/
    
    .cat-container-box{
    padding-bottom: 20px;
     white-space: nowrap;
        overflow-y: hidden;
        overflow-x: auto;
        width: 95%;    
        
        
        
    }
    
    
     .cat-container-box::-webkit-scrollbar { width: 0 !important }
    .cat-container-box{ overflow: -moz-scrollbars-none; }
 .cat-container-box::-webkit-scrollbar { width: 0 !important }
    .cat-container-box{ overflow: -moz-scrollbars-none; }
    
    
    .cat-container-box h3{
        margin-top: 50px;
        padding-top: 20px;
        font-size: 23px;
        font-weight: 600;
        color:#fff;
        border-top: 1px solid #393939;
        overflow-y: hidden;
        
    }
    
    .cat-box-info{
        display: inline-flex;
        flex-direction: column;
        width: 28%;
        margin-right: 20px;

        
        
    }
    
    .cat-box-info h6{
        color: #0B84FF;
        font-size: 18px;
                margin-top:25px;

    }
    
    .cat-box-info img{
        margin-top: 10px;
        width: 100%;
        height: 160px;
        border-radius: 6px;
        object-fit: cover;
        cursor: pointer;
        
    }
    
    .cat-box-info h4{
        margin-top: 15px;
        font-size: 18px;
        font-weight: 600;
        color: #DEDDDE;
        cursor: pointer;
        overflow-y: hidden;
        
    }
    
    .cat-box-info p{
        margin-top: 7px;
        font-size: 14px;
        font-weight: 300;
        color: #9C9C9C;
        white-space: pre-line;
        
    }
    
    .cat-box-info .user-account-cat-box{
/*        color: #0B83FF;*/
        color: rgba(0, 125, 255, 0.89);
        font-weight: 900;
        letter-spacing: 0.8px;
        cursor: pointer;
    } 
    
    

    
/*preview background and video button when clicked on item    */
    

     .video-preview-item-full-container{
        width: 100%;
        height: 80%;
        position: relative;
          overflow-y: hidden;
        
    }
    
    .video-preview-item-full-container img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .video-preview-item-full-subTitles{
        position: absolute;
        bottom: 10%;
        left: 5%;
        padding-top:30px;
        padding-bottom: 30px;
        padding-right: 58%;
        padding-left: 5%;
        background-color: rgba(48, 42 ,40,0.9);
        border-radius: 10px;
                z-index: 2;
         margin-right: 30px;

        
    }
    
    
    .video-preview-item-full-subTitles h4{
        font-size: 14px;
        color: #D1C5C2;
        font-weight: 600;
        letter-spacing: 1px;
        word-spacing: 1px;
        
    }
    
    .video-preview-item-full-subTitles h3{
        font-size: 22px;
        color: #fff;
        margin-top: 10px;
        font-weight: 600;
        letter-spacing: 1px;
        word-spacing: 0.7px;

    } 
    
     .video-preview-item-full-subTitles p{
        font-size: 16px;
         color: #CAC2C1;
         margin-top: 10px;
         font-weight: 400;
         width: 100%;
         
        max-height: 200px;

         
    }
    
    
    .video-preview-item-full-subTitles .user-account-subTitle{
        margin-top: 3px;
        font-size: 14px;
        color: #3d91e5;
        cursor: pointer;
        font-weight: 900;

    }
    
    .video-preview-item-full-buttons-contain{
        position: absolute;
        right: 8%;
        bottom: 37%;
    }
    
    .video-preview-item-full-buttons-contain button{
        display: inline-block;
        border: none;
        padding: 11px 30px;
        margin-right: 20px;
        font-size: 16px;
        border-radius: 12px;
        cursor: pointer;
        font-weight: 900;
        color: #fff;
        background-color: #0B84FF;
    }
    
    .video-preview-item-full-buttons-contain .watch-btn-play{
                padding: 11px 40px;

    }
    
    
    
    .video-preview-item-full-container video{
    position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        object-fit: cover;
        z-index: 1;
       
    }    

    
    
/*    episode page */
    .episode-container{
        margin-top: 50px;
    }
    .season h3{
        color: #fff;
        margin-left: 60px;
    }
    
    .videos-episode-preview{
                margin-left: 60px;

          overflow-y: hidden;
                white-space: nowrap;
        overflow-x: auto;
        margin-top: 30px;

    }
    
    .sec{
        display: inline-flex;
        flex-direction: column;
    width: 28%;
            margin-right: 10px;
margin-bottom: 50px;
        
        
        
    }
    
    .episodeCont{
        width: 88%;
        height: 150px;
        overflow-y: hidden;
        margin-bottom:20px;
                border-radius: 10px;

    }
    
    .episodeCont img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        cursor: pointer;
               
    }
    
    
    .vidInfo{
        width: 100%;
    }
    
    .vidInfo h4{
        color: #fff;
        font-size: 17px;
        font-weight: 900;
    }
    
    .vidInfo p{
        color: #727272;
        margin-top: 8px;
        font-size: 15px;
        white-space: normal;
        font-weight: 600;
    }
    
         .videos-episode-preview::-webkit-scrollbar { width: 0 !important }
  .videos-episode-preview { overflow: -moz-scrollbars-none; }
 .videos-episode-preview::-webkit-scrollbar { width: 0 !important }
    .videos-episode-preview { overflow: -moz-scrollbars-none; }
    
/*    video control container */
    
    .vidCtl{
        position: absolute;
        width: 100%;
        display: flex;
        align-items: center;
        background-color: rgba(0,0,0,0.3);
        z-index: 1;
    }
    
    .vidCtl h2{
        color: #fff;
        margin-right: 20px;
    }
    
    .vidCtl button{
        font-size: 50px;
        padding: 50px;
        color: #fff;
        font-weight: 600;
        background-color: transparent;
        border: none;
        cursor: pointer;
    }
    
    
    
/*    search page design and search box*/
    
              
 .search-box{
        margin-top: 20px;
        width: 100%;
        position: relative;
        margin-bottom: 50px;
         height: 35px;
     padding-left: 2px;

    }
    .search-box input[type="text"]{
        width: 50%;
        background-color: transparent;
        color: #bcbcbc;
        border: none;
        font-size:18px;
        border-bottom: 1px solid #4e4e4e;
        font-weight: 300;
        padding-bottom: 10px;
        padding-left: 10px;
    }
    
    .search-box input[type="text"]::placeholder{
        font-size: 16px;
    }
    
    .search-box input[type="text"]:focus{
        outline: none;
    }
    
    
/* Change the white to any color autofill default chrome ;) */
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active  {
    -webkit-box-shadow: 0 0 0 30px #585858 inset !important;
     outline: none;
border-top: none;
    border-bottom: none;
    border-left: none;
    border-right: none;
    border-radius: 6px;
    padding-top: 4px;
}

    
    .search-box .select-drop{
        position: absolute;
        
        margin-left: 40px;
        
        top: 28%;
        left: 50%;
    }
    
    .search-box .select-drop select{
        border: none;
         background: transparent;
        color: #fff;
        font-size: 15px;
        margin-right: 30px;
        color: #0B84FF;
        border-radius: 6px;
        padding: 4px;
        text-align-last:center;
        

   

    }
    .search-box .select-drop select:last-child{
        width: 140px;
    }
    
    
    .box-contain-search{
        width: 25%;
        display: inline-flex;
        flex-direction: column;
        margin-top: 25px;
        margin-right: 20px;
        padding-bottom: 20px;

        
    }
    
    .box-contain-search img{
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 6px;
        cursor: pointer;
    }
    
    .box-contain-search h4{
        margin-top: 20px;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
    }
    
    .box-contain-search p{
        margin-top: 11px;
       color: #9f9f9f;
        font-size: 16px;
    }
    
   .box-contain-search .user-account-cat-box{
/*        color: #0B83FF;*/
       margin-top: 5px;
        color: rgba(0, 125, 255, 0.89);
        font-weight: 900;
        letter-spacing: 0.8px;
        cursor: pointer;
       font-size: 14px;
    }
    
    
/*search for user design    */
    
    
  
    
     .box-contain-search-channel{
        width: 20%;
        display: inline-flex;
        flex-direction: column;
        margin-top: 25px;
        margin-right: 20px;
         padding-bottom: 20px;
        
    }
    
    .box-contain-search-channel img{
        width: 100%;
        height: 140px;
        object-fit: cover;
        border-radius: 6px;
        cursor: pointer;
    }
    
    .box-contain-search-channel h4{
        margin-top: 20px;
        color: #0B83FF;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
    }
    
    .box-contain-search-channel p{
        margin-top: 11px;
       color: #9f9f9f;
        font-size: 14px;
    }
    
   
    
    
    
/*upload form design*/
        


    .links-uploads{
        margin-top: 30px;
        margin-bottom: 50px;
    }    
    
    .links-uploads li{
        color: #969696;
        display: inline-block;
        margin-right: 20px;
        font-weight: 300;
        font-size: 16px;  
        padding-bottom: 8px;
        cursor: pointer;
    }
    
    .links-uploads .selected-link-upload{
        font-weight: 600;
        color: #fff;
        
    }
    
    .upload-container-elements-create{
        color: #fff;
    }
    
    .upload-fields{
        margin-bottom: 30px;
        font-size: 18px;
        font-weight: 600;
        position: relative;
        height: 40px;

    }
    
    .input-text-upload{
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.22);
            box-sizing: border-box;
            padding-top: 4px;
            padding-bottom: 6px;
            font-size: 18px;
            font-weight: 600;
            color: #fff;
            padding-left: 20px;
            padding-right: 20px;
            border: 1px solid rgba(62, 62, 62, 0.74);
            width: 40%;
    }
    

    .upload-fields Label{
        margin-right: 30px;
        font-weight: 300;
    }
    
    .label-file-upload{
        display: inline-block;
/*        background-color: rgba(212, 48, 48, 0.7);*/
        background-color: rgb(59, 59, 59);
        color: #fff;
        font-size: 16px;
        padding: 8px 16px;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 300;
    } 
    
    .label-file-upload:hover{
        background-color: rgb(83, 83, 83);
    }
    
    .upload-fields select{
        background: rgb(59, 59, 59);
        color: #fff;
        padding: 2px 10px;
        border-radius: 6px;
        position: absolute;
         top:0;
        left: 20%;
    }
    
    .upload-btn{
       
        background-color: rgb(55, 121, 211);
        color: #fff;
        font-size: 16px;
        padding: 8px 14px;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 600;
        border: none;
        width: 15%;
    }
    
    .upload-btn:hover{
       
        background-color: rgb(55, 131, 235);
    }
    
    
    .Label-file-upload-container{
        position: absolute;
        top:0;
        left: 20%;
    }
    
    .message-create-upload{
        display: inline-block;
        color: #52C12B;
        font-size: 30px;
        font-weight: 600;
        margin-top: 20px;
        position: absolute;
        bottom: 0%;
        left: 20%;
        
    }
    
    .error-create-upload{
        display: inline-block;
        color: rgba(201, 44, 63, 0.97);
        font-size: 18px;
        font-weight: 600;
        margin-top: 20px;
        position: absolute;
        bottom: 40%;
        left: 20%;
    }
    
    .upload-container-elements-add{
        color: #fff;
    }
    
    
/*    profile page design*/
    
    
    .profile-background-container{
        width: 100%;
        height: 80%;
        position: relative;
        overflow-y: hidden;
        
    }
    
    .profile-background-container .img-profile-background{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .change-profile-background-img{
        cursor: pointer;
    }
    
    .change-profile-background-img:hover{
                opacity: 0.95;

    }
    
    .profile-background-container .profile-background-elements-container
    {
        position: absolute;
        bottom: 10%;
        left: 5%;
        right: 5%;
        padding: 30px 40px;
        background-color: rgba(72, 68, 56, 0.78);
        border-radius: 20px;
        
    }
    
    .profile-background-elements-container h4{
        color: #fff;
        font-size: 30px;
        font-weight: 900;
        overflow-y: hidden;
        
    } 
    
    .profile-background-elements-container p{
        color: #c4c4c4;
        margin-top: 14px;
        font-size: 16px;
        font-weight: 300;
        width: 60%;
        
    } 
    
    .profile-background-elements-container textarea{
        color: #c4c4c4;
        margin-top: 14px;
        font-size: 16px;
        font-weight: 300;
        width: 60%;
        background: none;
        border: none;
        
    } 
    
    .profile-background-elements-container .btn-prof-sub
    {
        position: absolute;
        right: 10%;
        bottom: 35%;
        background-color: #c33838;
        color: #fff;
        padding: 8px 10px;
        border: none;
        font-size: 16px;
        font-weight: 600;
        border-radius: 6px;
    }
    
    
    
/*
    .profile-background-elements-container .btn-prof-sub:hover
    {
        
        background-color: #0b69ff;
    
    }
*/
    
    
    .profile-background-elements-container .btn-prof-sub-stripe
    {
        position: absolute;
        right: 10%;
        bottom: 35%;
    }
    
/*
    .profile-background-elements-container .btn-prof-sub-stripe:hover
    {
        
        background-color: #0b69ff;
    
    }
*/
    .stripe-button-el span{
        background-image: none;
        background: none;
        border: none;
                background-color: #0B84FF;
        box-shadow: none;

    }
    
    .stripe-button-el{
        background-image: none;
        background: none;
        background-color: #0B84FF;
        border: none;
        box-shadow: none;

    }
    
    .profile-info-container{
        margin-top: 40px;

    }
    
    .profile-info-container-elements{
        display: inline-flex;
        width: 19%;
        flex-direction: column;
        text-align: center;
        padding-bottom: 20px;
        overflow-y: hidden;
        
    }
    
    .profile-info-container-elements.reviews{
        cursor: pointer;
    }
    
    .profile-info-container-elements h4{
        color: #a3a3a3;
        font-size: 16px;
        
    } 
    
    .profile-info-container-elements p{
    
        color: #fff;
        font-size: 25px; 
        margin-top: 7px;
        font-weight: 600;
    }
    
    .profile-movie-tv-show-container{
        width: 90%;
        margin: 0 auto;
        margin-top: 40px;

    }
  
    .profile-content-container{
        
        white-space: nowrap;
        overflow-y: hidden;
        overflow-x: auto;
                position: relative;

        
    }
    .profile-content-container h4{
       color: #9a9a9a;
        font-size: 22px;
        font-weight: 900;
        margin-top: 20px;
        

    } 
    
      
    .profile-container-content-element{
        display: inline-flex;
        width: 26%;
        flex-direction: column;
        margin-top: 20px;
        margin-right: 30px;
        padding-bottom: 20px;
    }
    
    
    .profile-container-content-element img{
        margin-top: 10px;
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
                 cursor: pointer;

    } 
     .profile-container-content-element h5{
         margin-top: 20px;
         color: #fff;
         font-size: 16px;
         font-weight: 600;
         cursor: pointer;
    } 
 
    .profile-content-container input{
         background-color: transparent;
        border: none;
        margin-left: 30px;
/*        border-radius: 5px;*/
        padding-left: 20px;
        color: #fff;
        font-size: 16px;
        position: absolute;
        padding:6px 20px;
        border-left: 2px solid #9a9a9a;
        width: 80%;
        
        
    } 
    
    .show-movie-profile{
        overflow-x: auto;
    }
    .show-tv-profile{
        overflow-x: auto;
    }
    

    .not-found-message-search-profile{
        color: #fff;
        font-size: 20px;
        padding-bottom: 30px;
        padding-top: 10px;
    }
    
    .profile-content-container::-webkit-scrollbar { width: 0 !important }
    .profile-content-container { overflow: -moz-scrollbars-none; }
    .profile-content-container::-webkit-scrollbar { width: 0 !important }
    .profile-content-container{ overflow: -moz-scrollbars-none; }
    
    .show-movie-profile::-webkit-scrollbar { width: 0 !important }
    .show-movie-profile{ overflow: -moz-scrollbars-none; }
    .show-movie-profile::-webkit-scrollbar { width: 0 !important }
    .show-movie-profile{ overflow: -moz-scrollbars-none; }
    
    
    .show-tv-profile::-webkit-scrollbar { width: 0 !important }
    .show-tv-profile{ overflow: -moz-scrollbars-none; }
    .show-tv-profile::-webkit-scrollbar { width: 0 !important }
    .show-tv-profile{ overflow: -moz-scrollbars-none; }
    
    
    .updatePriceModal{
    position:fixed;
    width:100%;
    height:100%;
    top:0;
    left:0;
    background-color:rgba(0,0,0,0.5);
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.8s;
    }
    
    .updatePriceModal-active{
        visibility:visible;
        opacity:1;
    }
    
    .updatePriceModalContenet{
    background-color:#fff;
    width:30%;
    height:25%;
        border-radius:6px;
    margin:0 auto;
    margin-top:40px;
    
    }
    
    .updatePriceModalContenet h4{
    
    width:100%;
    display:block;
    margin:13px auto;
        padding-left: 45px;
    color: #000;
    font-weight: 500;
        font-size: 18px;
        padding-bottom: 10px;
        border-bottom: 1px solid #c9c9c9;
    }
    
    
    .updatePriceModaltext{
    width:80%;
    display:block;
    margin:26px auto;
        border-radius:3px;
        border:none;
        border:1px solid #d3d3d3;
        font-size:16px;
        padding: 3px 14px;

    }
    
    .updatePriceModaltext:focus{
        border: 1px solid #4587e0;
    }
   
    
    .updatePriceModalSubmit{
    display:inline-block;
    margin-left:40px;
    margin-right:4px;
    background-color:#3880FF;
    color:#fff;
    border:none;
    padding:8px 10px;
    font-size:16px;
    border-radius:6px;
    cursor:pointer;

    }
    
    .updatePriceModalClose{
    display:inline-block;
    background-color:#6D757D;
    color:#fff;
    border:none;
    padding:8px 14px;
    font-size:16px;
    border-radius:6px;
    cursor:pointer;


    }
    
    
    .review-btn-item{
        position: absolute;
        top:5%;
        left:5%;
        font-size: 16px;
        padding: 10px 14px;
        border: none;
        background-color: rgba(70, 70, 70, 0.88);
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }
    
    .review-btn-item:hover{
        background-color: #1c1c1c;
    }
    
    .review-section-profile{
          width: 100%;
          height: 100%;
          position: fixed;
          top: 0;
        left: 0;
        background-color: rgba(0,0,0,0.5);
          flex-direction: column;
            align-items: center;
          display: none;
        z-index: 2;

      }
      
      .review-section-profile-container{
         width: 50%;
          border-radius: 5px;
            margin: 0 auto;

          background-color: #fff;
          margin-top: 20px;
          max-height: 90%;
          position: relative;
      }

      
      .review-section-profile-container h5{
          margin-left: 30px;
          margin-top: 50px;
          font-size: 22px;
          font-weight: 400;
          color: #000;
          margin-bottom: 30px;
          display: inline-block;
      } 
      
      .review-section-profile-container h6{
          position: absolute;
          top: 2%;
          right: 2%;
          font-size: 22px;
          cursor: pointer;
          color: #404040;
          
      }
      
      .reviews-input{
          margin-left: 30px;
          width: 90%;
      }
      
      .reviews-input textarea{
           width: 94%;
          height: 90px;
          padding-left: 20px;
          padding-top: 10px;
          font-weight: 300;
          font-size: 15px;
          color: #262626;
          margin-bottom: 20px;
           border: 1px solid rgba(31, 116, 216, 0.58);
          border-radius: 4px;
      }
      
      
      .reviews-input .reviews-input-btn{
          border-radius: 5px;
          background-color: #3B78E7;
          padding: 6px 20px;
          color: #fff;
          border: none;
          font-size: 16px;
          float: right;
          margin-right: 40px;
          cursor: pointer;
          margin-bottom: 20px;
      }
     .reviews-input .reviews-input-btn:hover{
          
          background-color: rgb(26, 95, 222);
          
      }


    .reviews-input .update
    {
    display: none;
    background-color: #636364;

    }

    .reviews-input .update:hover{
    background-color: #4a4a4a;

    }

    .reviews-input .delete
    {
    margin-right: 10px;
    display: none;

    background-color: rgba(221, 71, 71, 0.9);

    }

    .reviews-input .delete:hover
    {
    background-color: rgb(221, 71, 71);

    }

    
     
      
      
      .reviews-input textarea::placeholder{
           color: #a0a0a0;
          
      }
      
      .reviews-input textarea:focus{
          border: 1px solid #0573f4;
          
      }
      
      
      .reviews-profile{
          margin-left: 30px;
          margin-top: 5px;
      }
      
      
      .reviews-profile img{
          width: 40px;
          height: 40px;
          display: inline-block;
          border-radius: 200px;
          object-fit: cover;
      }
      
      .reviews-profile h2{
          
          display: inline-block;
          margin-left: 10px;
          font-size: 16px;
          margin-bottom: 10px;
          font-weight: 600;
      }
      
      .reviews-profile p{
          font-size: 14px;
          width: 90%;
          font-weight: 300;
          color: #292929;
          margin-top: 10px;
          margin-bottom: 20px;
          line-height: 1.2em;
          font-family: 'Lato';
          overflow-y: hidden;
      }
      
    
    
    
    
/*    home user box container*/
    
    
    
    .subscibedToChannelList-Container{
        width: 100%;
        margin-left: 40px;
        margin-top: 10px;
        overflow-y: hidden;
        overflow-x: auto;
        white-space: nowrap;
        
    }
    
      .subscibedToChannelList-Container::-webkit-scrollbar { width: 0 !important }
    .subscibedToChannelList-Container{ overflow: -moz-scrollbars-none; }
 .subscibedToChannelList-Container::-webkit-scrollbar { width: 0 !important }
    .subscibedToChannelList-Container{ overflow: -moz-scrollbars-none; }
    
    
    .subscibedToChannelList-Container .subscibedToChannelList{
        width: 20.1%;
        display: inline-flex;
        flex-direction: column;
        margin-top: 10px;
        margin-right: 31px;
        cursor: pointer;
    }
    
    .subscibedToChannelList-Container .subscibedToChannelList:last-child{
        padding-right: 15px;
        width: 21%;

    }
    
    .subscibedToChannelList img{
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 6px;
        
    }
    
    .subscibedToChannelList h5{
        margin-top: 10px;
        color: #b7b7b7;
    }
    
    
    .home-user-box-container{
        width: 25%;
        display: inline-flex;
        flex-direction: column;
        margin-left: 40px;
        margin-top: 30px;
        padding-bottom: 10px;
    }
    
    .home-user-box-container h6{
        color: #0B84FF;
        font-size: 18px;
        font-weight: bold;
        
    }
    
    .home-user-box-container img{
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 8px;
        margin-top: 10px;
        cursor: pointer;
    }
    
    .home-user-box-container h2{
        color: #fff;
        font-size: 18px;
        font-weight: 900;
        margin-top: 12px;
        cursor: pointer;


    } 
    
    .home-user-box-container h4{
        color: #a5a5a5;
        font-size: 14px;
        font-weight: 400;
        margin-top: 7px;

    }
    .home-user-box-container h5{
        color: #0B84FF;
        font-size: 14px;
        font-weight: 900;
        margin-top: 6px;
        cursor: pointer;

    }
    .home-user-box-container h7{
        color: #c7c7c7;
        font-size: 14px;
        font-weight: 900;
        margin-top: 6px;
        cursor: pointer;

    }
    
    
    
/*    delete page*/
    
    .load-delete-contents{
        
        flex-direction: column;
        white-space: nowrap;
        overflow-y: hidden;
        overflow-x: auto;
    }
    
    
    .load-delete-elements h7{
        font-size: 20px;
        font-weight: 900;
        color: #b2b2b2;
        
    }
    
    .load-delete-content-element{
        margin-top: 30px;
        width: 24%;
        display: inline-flex;
        flex-direction: column;
        margin-right: 20px;
        padding-bottom: 20px
        
    }
    
    .load-delete-content-element img{
     width: 100%;
    height: 140px;
        object-fit: cover;
        border-radius: 4px;
    }
    
    .load-delete-content-element h4{
     font-size: 18px;
        color: #fff;
        font-weight: 600;
        font-size: 18px;
    margin-top: 12px;

    }
    
    .load-delete-content-element p{
        color: #989898;
        font-weight: 600;
        font-size: 13px;
    margin-top: 12px;

    }
    .load-delete-content-element button{
        margin-top: 12px;
        color: #fff;
        background-color: #d84b4b;
        border-radius: 4px;
        padding: 6px 10px;
        border: none;
        font-size: 14px;
        cursor: pointer;
        width: 50%;
    }
   
    .load-delete-contents::-webkit-scrollbar { width: 0 !important }
    .load-delete-contents { overflow: -moz-scrollbars-none; }
 .load-delete-contents::-webkit-scrollbar { width: 0 !important }
    .load-delete-contents{ overflow: -moz-scrollbars-none; }
    
    
    
    .del-btn-upload{
        color: #fff;
        background-color: #d84b4b;
        border-radius: 4px;
        padding: 10px 0px;
        border: none;
        font-size: 16px;
        cursor: pointer;
        width: 18%;
        margin-bottom: 30px;
        
    }
    
    
</style>


