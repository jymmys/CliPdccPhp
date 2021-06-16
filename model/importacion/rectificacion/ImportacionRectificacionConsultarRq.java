/**
 * 
 */
package org.sieca.everis.pdcc.model.importacion.rectificacion;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class ImportacionRectificacionConsultarRq extends RequestBody{
	
    private String numeroDeclaracion;

	/**
	 * 
	 */
	public ImportacionRectificacionConsultarRq() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @return the numeroDeclaracion
	 */
	public String getNumeroDeclaracion() {
		return numeroDeclaracion;
	}

	/**
	 * @param numeroDeclaracion the numeroDeclaracion to set
	 */
	public void setNumeroDeclaracion(String numeroDeclaracion) {
		this.numeroDeclaracion = numeroDeclaracion;
	}
    

}
