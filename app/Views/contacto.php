<!-- Asi se incrusta la sección del navbar y se le da el titulo a la pagina -->
<?= view('templates/navbar', ['title' => 'Nelva Bienes Raíces']) ?>

    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --text: #333;
            --text-light: #7f8c8d;
        }
        
        
        
        body {
            color: var(--text);
            line-height: 1.6;
        }
        
        /* Hero Section with Parallax */
        .hero {
            height: 70vh;  /* Cambiado de 100vh a 70vh */
            background: url('images/Servicios/parallax.png') no-repeat center center/cover;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 0 2rem;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        
        .btn {
            display: inline-block;
            padding: 0.8rem 1.8rem;
            background-color: var(--secondary);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* About Section */
        .section {
            padding: 5rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .section-title p {
            color: rgb(51,51,51);
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Services Section */
        .services {
            background-color: #f9f9f9;
        }
        
        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .service-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .service-img {
            height: 250px;
            overflow: hidden;
        }
        
        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .service-card:hover .service-img img {
            transform: scale(1.1);
        }
        
        .service-content {
            padding: 2rem;
        }
        
        .service-content h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }
        
        .service-features {
            margin: 1.5rem 0;
        }
        
        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.8rem;
        }
        
        .feature-icon {
            color: var(--secondary);
            margin-right: 1rem;
            font-size: 1.2rem;
            margin-top: 0.2rem;
        }
        
        .service-btn {
            display: inline-block;
            margin-top: 1rem;
            width: 100%;
            text-align: center;
            background-color: var(--primary);
        }
        
        .service-btn:hover {
            background-color: var(--secondary);
        }
        
        .contact-info2 {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            
            border-top: 1px solid #eee;
        }
        
        .contact-item2 {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }
        
        .contact-icon {
            margin-right: 1rem;
            color: var(--secondary);
            font-size: 1.2rem;
            width: 20px;
            text-align: center;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .section {
                padding: 3rem 5%;
            }
        }
        
        @media (max-width: 576px) {
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .services-container {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="contact-info-section" style="padding: 60px 5%; background-color: #f9f9f9;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
            <!-- Bloque 1: Ubicación -->
            <div style="flex: 1; min-width: 250px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: center;">
                <div style="color: #333edaff; font-size: 30px; margin-bottom: 15px;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 style="font-size: 20px; color: #2c3e50; margin-bottom: 15px; text-transform: uppercase;">ENCUÉNTRANOS AQUÍ</h3>
                <p style="color: #555; line-height: 1.6;">
                    Calle Matamoros, Esquina Abasolo<br>
                    Frente a CFE, Segunda Planta<br>
                    San Pedro Pochutla, Mexico
                </p>
            </div>
            
            <!-- Bloque 2: Contacto -->
            <div style="flex: 1; min-width: 250px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: center;">
                <div style="color: #333edaff; font-size: 30px; margin-bottom: 15px;">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3 style="font-size: 20px; color: #2c3e50; margin-bottom: 15px; text-transform: uppercase;">CONTÁCTANOS</h3>
                <p style="color: #555; line-height: 1.6;">
                    <strong>Teléfono:</strong> 958-119-9171<br>
                    <strong>Email:</strong> marketingnelvabr@gmail.com
                </p>
            </div>
            
            <!-- Bloque 3: Horarios -->
            <div style="flex: 1; min-width: 250px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: center;">
                <div style="color: #333edaff; font-size: 30px; margin-bottom: 15px;">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 style="font-size: 20px; color: #2c3e50; margin-bottom: 15px; text-transform: uppercase;">NUESTROS HORARIOS</h3>
                <p style="color: #555; line-height: 1.6;">
                    <strong>Lunes a viernes:</strong><br>
                    9:30 am - 5:30 pm<br><br>
                    <strong>Sábados:</strong><br>
                    9:30 am - 1:30 pm
                </p>
            </div>
        </div>
    </div>
</section>



<section class="contact-section" style="padding: 20px 5%; background-color: #ffffff;">
    <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
        <h1 style="font-size: 42px; color: #2c3e50; margin-bottom: 20px; text-transform: uppercase;">CONTÁCTA CON NOSOTROS</h1>
        <p style="font-size: 20px; color: #7f8c8d; margin-bottom: 50px;">Nos encantaría saber de usted.</p>
        <div style="height: 2px; width: 100px; background-color: #e74c3c; margin: 0 auto 50px;"></div>
        
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 40px; text-align: left;">
            <!-- Información de Contacto -->
            <div style="flex: 1; min-width: 300px;">
                <div style="margin-bottom: 30px;">
                    <h2 style="font-size: 24px; color: #2c3e50; margin-bottom: 15px; text-transform: uppercase;">Contacta con nosotros para cualquier consulta.</h2>
                    <p style="color: #555; line-height: 1.6;">
                        Si tienes alguna duda o necesitas más información, estamos aquí para ayudarte. Puedes llenar el formulario con tus detalles, contarnos cómo podemos ayudarte, o dejarnos una nota para que te contactemos. También puedes obtener una cotización personalizada para tu próximo proyecto inmobiliario.
                    </p>
                </div>
                
                <!-- Sección de pasos de contacto -->
<section class="contact-steps" style="padding: 60px 5%; background-color: #fff;">
    <div style="max-width: 600px; margin: 0 auto;">
        <h2 style="font-size: 32px; color: #2c3e50; text-align: center; margin-bottom: 40px;">¿Cómo podemos ayudarte?</h2>
        
        <div style="display: flex; flex-direction: column; gap: 20px;">
            <!-- Paso 1 -->
            <div style="padding: 20px; background: #f8f9fa; border-radius: 10px; display: flex; align-items: center; gap: 20px; transition: all 0.3s ease; cursor: pointer; box-shadow: 0 2px 10px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(10px)'" onmouseout="this.style.transform='translateX(0)'">
                <div style="background: #333edaff; color: white; min-width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 20px;">1</div>
                <div>
                    <h3 style="color: #2c3e50; margin-bottom: 5px; font-size: 20px;">Rellena tus detalles</h3>
                    <p style="color: #666; line-height: 1.5; margin: 0;">Compártenos tu información básica para poder contactarte.</p>
                </div>
            </div>

            <!-- Paso 2 -->
            <div style="padding: 20px; background: #f8f9fa; border-radius: 10px; display: flex; align-items: center; gap: 20px; transition: all 0.3s ease; cursor: pointer; box-shadow: 0 2px 10px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(10px)'" onmouseout="this.style.transform='translateX(0)'">
                <div style="background: #333edaff; color: white; min-width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 20px;">2</div>
                <div>
                    <h3 style="color: #2c3e50; margin-bottom: 5px; font-size: 20px;">Cuéntanos en qué te podemos ayudar</h3>
                    <p style="color: #666; line-height: 1.5; margin: 0;">Describe el tipo de propiedad que buscas o el servicio que necesitas.</p>
                </div>
            </div>

            <!-- Paso 3 -->
            <div style="padding: 20px; background: #f8f9fa; border-radius: 10px; display: flex; align-items: center; gap: 20px; transition: all 0.3s ease; cursor: pointer; box-shadow: 0 2px 10px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(10px)'" onmouseout="this.style.transform='translateX(0)'">
                <div style="background: #333edaff; color: white; min-width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 20px;">3</div>
                <div>
                    <h3 style="color: #2c3e50; margin-bottom: 5px; font-size: 20px;">Déjanos un mensaje</h3>
                    <p style="color: #666; line-height: 1.5; margin: 0;">Comparte cualquier información adicional que consideres relevante.</p>
                </div>
            </div>

            <!-- Paso 4 -->
            <div style="padding: 20px; background: #f8f9fa; border-radius: 10px; display: flex; align-items: center; gap: 20px; transition: all 0.3s ease; cursor: pointer; box-shadow: 0 2px 10px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(10px)'" onmouseout="this.style.transform='translateX(0)'">
                <div style="background: #333edaff; color: white; min-width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 20px;">4</div>
                <div>
                    <h3 style="color: #2c3e50; margin-bottom: 5px; font-size: 20px;">Obtén cotizaciones</h3>
                    <p style="color: #666; line-height: 1.5; margin: 0;">Recibe información detallada sobre precios y opciones disponibles.</p>
                </div>
            </div>
        </div>
    </div>
</section>

            </div>

            
            <!-- Mapa -->
            <div style="flex: 1; min-width: 300px; height: 400px; background-color: #f5f5f5;">
                <!-- Aquí puedes insertar tu mapa de Google Maps -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.0962516054083!2d-96.47265642221858!3d15.746046645921181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85b8d524d1c0c813%3A0x28e1b7915d888ef8!2sNELVA%20Bienes%20Ra%C3%ADces!5e0!3m2!1ses!2smx!4v1754065107116!5m2!1ses!2smx" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>

                                        <!-- Formulario de Contacto -->
            <div style="flex: 1; min-width: 300px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <h3 style="font-size: 24px; color: #2c3e50; margin-bottom: 20px;">Contáctanos</h3>
                
                <form action="" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
                    <div style="display: flex; flex-direction: column;">
                        <label for="nombre" style="color: #2c3e50; margin-bottom: 5px;">Nombre Completo *</label>
                        <input type="text" id="nombre" name="nombre" required 
                            style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;">
                    </div>

                    <div style="display: flex; flex-direction: column;">
                        <label for="email" style="color: #2c3e50; margin-bottom: 5px;">Correo electrónico *</label>
                        <input type="email" id="email" name="email" required 
                            style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;">
                    </div>

                    <div style="display: flex; flex-direction: column;">
                        <label for="asunto" style="color: #2c3e50; margin-bottom: 5px;">Asunto *</label>
                        <select id="asunto" name="asunto" required 
                                style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;">
                            <option value="">Seleccione una opción</option>
                            <option value="compra">Compra</option>
                            <option value="venta">Venta</option>
                            <option value="renta">Alquiler de </option>
                            <option value="informacion">Información General</option>
                        </select>
                    </div>

                    <div style="display: flex; flex-direction: column;">
                        <label for="telefono" style="color: #2c3e50; margin-bottom: 5px;">Número de teléfono *</label>
                        <input type="tel" id="telefono" name="telefono" required 
                            style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;">
                    </div>

                    <div style="display: flex; flex-direction: column;">
                        <label for="mensaje" style="color: #2c3e50; margin-bottom: 5px;">Mensaje *</label>
                        <textarea id="mensaje" name="mensaje" rows="4" required 
                                style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" 
                            style="background-color: #333edaff; color: white; padding: 12px 24px; border: none; 
                                border-radius: 4px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease;">
                        Enviar
                    </button>
                </form>
            </div>


            </div>



            


        </div>
    </div>
</section>


<!-- Asi se incrusta la sección del footer -->
<?= view('templates/footer') ?>