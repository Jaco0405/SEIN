@extends('layouts.main')

@section('content')

<!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <br><br>
                    <h2><strong>Líderes en Tecnología</strong></h2>
                    <br><br>
                    <!--<p><h4><strong>Líderes en Tecnología</strong></h4>></p>-->
                    <!--<ul class="actions">
                        <li><a href="#content" class="button big special">Sign Up</a></li>
                        <li><a href="#elements" class="button big alt">Learn More</a></li>
                    </ul>-->
                </div>
            </section>

        <!-- One 
            <section id="one" class="wrapper style1">
                <header class="major">
                    <h4>“Las Organizaciones triunfadoras del próximo decenio serán las que utilicen los medios digitales para reinventar su propio funcionamiento”</h4>
                    <p>“Las Organizaciones triunfadoras del próximo decenio serán las que utilicen los medios digitales para reinventar su propio funcionamiento”</p>
                </header>
                <div class="container">
                    <div class="row">
                        <div class="4u">
                            <section class="special box">
                                <i class="icon fa-area-chart major"></i>
                                <h3>Justo placerat</h3>
                                <p>Eu non col commodo accumsan ante mi. Commodo consectetur sed mi adipiscing accumsan ac nunc tincidunt lobortis.</p>
                            </section>
                        </div>
                        <div class="4u">
                            <section class="special box">
                                <i class="icon fa-refresh major"></i>
                                <h3>Blandit quis curae</h3>
                                <p>Eu non col commodo accumsan ante mi. Commodo consectetur sed mi adipiscing accumsan ac nunc tincidunt lobortis.</p>
                            </section>
                        </div>
                        <div class="4u">
                            <section class="special box">
                                <i class="icon fa-cog major"></i>
                                <h3>Amet sed accumsan</h3>
                                <p>Eu non col commodo accumsan ante mi. Commodo consectetur sed mi adipiscing accumsan ac nunc tincidunt lobortis.</p>
                            </section>
                        </div>
                    </div>
                </div>
            </section>-->
            
        <!-- Two -->
            <section id="two" class="wrapper style1">
                <header class="major">
                    <h2>“Las Organizaciones triunfadoras del próximo decenio serán las que utilicen los medios digitales para reinventar su propio funcionamiento”</h2>
                    <!--<p>Amet nisi nunc lorem accumsan</p>-->
                </header>
                <div class="container">
                    <div class="row">
                        <div class="6u">
                            <section class="special">
                                <a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
                                <h3>Reparación de equipo de cómputo</h3>
                                <p>Contamos con técnicos especializados en la reparación de cualquier equipo de cómputo, años de
                                experiencia nos respaldan como los mejores para dar un servicio de calidad. </p>
                                <ul class="actions">
                                    <li><a href="{{URL::to('/nosotros')}}" class="button alt">Ver más</a></li>
                                </ul>
                            </section>
                        </div>
                        <div class="6u">
                            <section class="special">
                                <a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
                                <h3>Redes</h3>
                                <p>Contamos con certificaciones que nos evalúan como unos de los mejores para realizar la instalacion de redes de cómputo completas.</p>
                                <ul class="actions">
                                    <li><a href="{{URL::to('/nosotros')}}" class="button alt">Ver más</a></li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Three -->
            <section id="three" class="wrapper style2">
                <div class="container">
                    <div class="row">
                        <div class="8u">
                            <section>
                                <h2>Venta de equipos</h2>
                                <a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
                                <p>Nuestros ejecutivos de ventas estan capacitados para encontrar el producto que mas se adecue a su necesidad, contamos con una amplia gama  de productos tecnologicos de cualquier tipo, sobre los cuales nuestros ejecutivos podran informarle sobre las caracteristicas de cada uno de ellos garantizando satisfaccion total.</p>
                            </section>
                        </div>
                        <div class="4u">
                            <section>
                                <h3>Magna massa blandit</h3>
                                <p>Feugiat amet accumsan ante aliquet feugiat accumsan. Ante blandit accumsan eu amet tortor non lorem felis semper. Interdum adipiscing orci feugiat penatibus adipiscing col cubilia lorem ipsum dolor sit amet feugiat consequat.</p>
                                <ul class="actions">
                                    <li><a href="{{URL::to('/nosotros')}}" class="button alt">Learn More</a></li>
                                </ul>
                            </section>
                            <hr />
                            <section>
                                <h3>Ante sed commodo</h3>
                                <ul class="alt">
                                    <li><a href="#">Erat blandit risus vis adipiscing</a></li>
                                    <li><a href="#">Tempus ultricies faucibus amet</a></li>
                                    <li><a href="#">Arcu commodo non adipiscing quis</a></li>
                                    <li><a href="#">Accumsan vis lacinia semper</a></li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

@stop

