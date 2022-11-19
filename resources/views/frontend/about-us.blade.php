@extends('./frontend/layout/master')

@section('title', 'about-us')

@section('content')
 <!-- ====== Page Header ====== --> 
 <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">    
                    <h2 class="page-title">About</h2>
                    <p class="page-description">About our company</p>                 
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->

    <!-- ====== Breadcrumbs Area ====== --> 
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">About</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <!-- ====== About Main Content ====== --> 
    <section class="about-main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-top-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-area text-center">
                                    <h2 class="section-title default-text-gradient">Why <br/>Choose Us</h2>
                                    <p class="section-description">Best offers from the house chef</p>
                                </div><!-- /.section-title-area -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-md-5">
                                <div class="about-content-left">
                                    <h2>Best<br> Rent Service,<br> enjoy your<br> life</h2>
                                </div><!-- /.about-content-left-->
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-7">
                                <div class="about-content-right">
                                    <p>Sed pellentesque pulvinar arcu ac congue. Sed sed est nec justo maximus blandit. Curabitur lacinia, eros sit amet maximus suscipit, magna sapien veneuynatis eros, et gravida urna massa ut lectus. Quisque lacinia laciunia viverra. Nullram nec est et lorem sodales ornare a in sapien. In trtset urna marximus, conse ctetur iligula in, gravida erat. Nullam digniifssrim hendrerit auctor. Sed varius, dolor vitae iaculis condim rtweentum, massa nisl cursus sapien, gravida ultrices nisi dolor non erat.</p>
                                </div><!-- /.about-conten-right-->
                            </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.top-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-main-content -->

    <!-- ====== About Bottom Content ====== --> 
    <section class="about-bottom-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 full-width-content">
                    <div class="image-content gradient-circle">
                        <div>
                            <span>
                                <img src="assets/images/about-page-johan.png" alt="johan" />
                            </span>
                        </div>
                    </div><!-- /.image-content -->
                    <div class="author-content">
                        <div class="author-content-area">                        
                            <h2 class="author-name default-text-gradient">Dr. Abdus Sabbir</h2> 
                            <p class="author-designation">Rent House Admin</p>
                        </div><!-- /.author-content-area -->
                    </div><!-- /.author-content -->
                    <p>Cras et mauris eget lorem ultricies fermentum a in diam. Morbi mollis pesllentesque aug ue nec rhoncus. Nam ut ogrci augue. Phasellus ac venenatis orci. Nulalam iaculis lao reet maa, vitae tempus ante tincidunte et. dolor st ametisnj, consectetur adipiscing elit. Cras vitaie nbh nisl. Cras et mauis eget loremams ultricies ferme ntum a in diam.Nam ut orci augue. Pha sellus ac venen adatis orci. Nullam iaculis lao reetings maa, vitae tempus ante tincidunte et. </p>
                   <div class="social-media footer pull-left">
                       <span class="pull-left">Follow me :</span>
                       <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                   </div><!-- /.social-media -->
                   <div class="author-sign pull-right">
                       <img src="assets/images/sine.png" alt="sine" />
                   </div><!-- /.author-sign -->
                </div><!-- /.col-md-7 -->
            </div><!-- /.riv row -->
        </div><!-- /.container -->
    </section><!-- /.about-bottom-content -->


    @endsection