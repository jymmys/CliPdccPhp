/**
 * 
 */
package org.sieca.everis.pdcc.model.transbordoMercancia;

/**
 * @author ytorregl
 *
 */
public class Consignatario {
	
	private String direccion;
	private String nombre;
	private String numeroDocumento;
	private String tipoDocumento;
	/**
	 * 
	 */
	public Consignatario() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param direccion
	 * @param nombre
	 * @param numeroDocumento
	 * @param tipoDocumento
	 */
	public Consignatario(String direccion, String nombre, String numeroDocumento, String tipoDocumento) {
		super();
		this.direccion = direccion;
		this.nombre = nombre;
		this.numeroDocumento = numeroDocumento;
		this.tipoDocumento = tipoDocumento;
	}
	/**
	 * @return the direccion
	 */
	public String getDireccion() {
		return direccion;
	}
	/**
	 * @param direccion the direccion to set
	 */
	public void setDireccion(String direccion) {
		this.direccion = direccion;
	}
	/**
	 * @return the nombre
	 */
	public String getNombre() {
		return nombre;
	}
	/**
	 * @param nombre the nombre to set
	 */
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	/**
	 * @return the numeroDocumento
	 */
	public String getNumeroDocumento() {
		return numeroDocumento;
	}
	/**
	 * @param numeroDocumento the numeroDocumento to set
	 */
	public void setNumeroDocumento(String numeroDocumento) {
		this.numeroDocumento = numeroDocumento;
	}
	/**
	 * @return the tipoDocumento
	 */
	public String getTipoDocumento() {
		return tipoDocumento;
	}
	/**
	 * @param tipoDocumento the tipoDocumento to set
	 */
	public void setTipoDocumento(String tipoDocumento) {
		this.tipoDocumento = tipoDocumento;
	}
	
	

}
