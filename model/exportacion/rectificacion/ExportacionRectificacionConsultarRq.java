/**
 * 
 */
package org.sieca.everis.pdcc.model.exportacion.rectificacion;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class ExportacionRectificacionConsultarRq extends RequestBody{
	
    private String numeroDeclaracion;

	/**
	 * 
	 */
	public ExportacionRectificacionConsultarRq() {
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
