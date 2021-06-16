/**
 * 
 */
package org.sieca.everis.pdcc.model.exportacion.anulacion;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class ExportacionAnulacionEliminarRq extends RequestBody{
	
	private String numeroDeclaracion;

	/**
	 * 
	 */
	public ExportacionAnulacionEliminarRq() {
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
