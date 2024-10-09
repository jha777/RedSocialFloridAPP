                            <form  action="signup_save.php" method="post" autocomplete="on"> 
                                <h4> Formulario de Registro </h4> 
								<hr>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Tu usuario</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="Usuario" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Tu contraseña </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="Contraseña"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Nombre </label>
                                    <input id="passwordsignup" name="firstname" required="required" type="text" placeholder="First Name"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="u">Apellido </label>
                                    <input id="passwordsignup" name="lastname" required="required" type="text" placeholder="Last Name"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="">Categoria </label>
									<select id="passwordsignup"  name="gender">
										<option></option>
										<option>Arte, Cultura y Música</option>
										<option>Restaurantes</option>
                                        <option>Hoteles</option>
                                        <option>Panaderia y Pastelería</option>
                                        <option>Comidas y Bebidas</option>
                                        <option>Heladerías</option>
                                        <option>Misceláneas y Licores</option>
                                        <option>Centros turísticos</option>
                                        <option>Tecnología y Hogar</option>
                                        <option>Servicios para el Hogar</option>
                                        <option>Ferretería</option>
                                        <option>Supermercados</option>
                                        <option>Belleza y SPA</option>
                                        <option>Salud y Bienestar</option>
                                        <option>Moda y Accesorios</option>
									</select>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Regístrate"/> 
								</p>
                                <p class="change_link">  
									Ya estás registrado ?
									<a href="#tologin" class="to_register"> Ingresar </a>
								</p>
                            </form>