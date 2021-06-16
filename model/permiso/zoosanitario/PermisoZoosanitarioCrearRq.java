/**
 * 
 */
package org.sieca.everis.pdcc.model.permiso.zoosanitario;

import org.sieca.everis.pdcc.model.permiso.Encabezado;
import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class PermisoZoosanitarioCrearRq extends RequestBody{
	
    private Encabezado encabezado;
    private Datos datos;
    private String tipoOperacion;
	/**
	 * 
	 */
	public PermisoZoosanitarioCrearRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the encabezado
	 */
	public Encabezado getEncabezado() {
		return encabezado;
	}
	/**
	 * @param encabezado the encabezado to set
	 */
	public void setEncabezado(Encabezado encabezado) {
		this.encabezado = encabezado;
	}
	/**
	 * @return the datos
	 */
	public Datos getDatos() {
		return datos;
	}
	/**
	 * @param datos the datos to set
	 */
	public void setDatos(Datos datos) {
		this.datos = datos;
	}
	/**
	 * @return the tipoOperacion
	 */
	public String getTipoOperacion() {
		return tipoOperacion;
	}
	/**
	 * @param tipoOperacion the tipoOperacion to set
	 */
	public void setTipoOperacion(String tipoOperacion) {
		this.tipoOperacion = tipoOperacion;
	}
    
    

}
