/**
 * 
 */
package org.sieca.everis.pdcc.model.afpa;

/**
 * @author lmoremos
 *
 */
public class Persona {

	private String nombre;
	private String tipoDocumento;
	private String numeroDocumento;
	private String domicilioFiscal;
	private String direccion;
	private String telefono;

	/**
	 * 
	 */
	public Persona() {

	}

	/**
	 * @param nombre
	 * @param tipoDocumento
	 * @param numeroDocumento
	 * @param domicilioFiscal
	 * @param direccion
	 * @param telefono
	 */
	public Persona(String nombre, String tipoDocumento, String numeroDocumento, String domicilioFiscal,
			String direccion, String telefono) {
		super();
		this.nombre = nombre;
		this.tipoDocumento = tipoDocumento;
		this.numeroDocumento = numeroDocumento;
		this.domicilioFiscal = domicilioFiscal;
		this.direccion = direccion;
		this.telefono = telefono;
	}

	/**
	 * @param numeroDocumento
	 * @param tipoDocumento
	 */
	public Persona(String numeroDocumento, String tipoDocumento) {
		super();
		this.tipoDocumento = tipoDocumento;
		this.numeroDocumento = numeroDocumento;
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
	 * @return the domicilioFiscal
	 */
	public String getDomicilioFiscal() {
		return domicilioFiscal;
	}

	/**
	 * @param domicilioFiscal the domicilioFiscal to set
	 */
	public void setDomicilioFiscal(String domicilioFiscal) {
		this.domicilioFiscal = domicilioFiscal;
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
	 * @return the telefono
	 */
	public String getTelefono() {
		return telefono;
	}

	/**
	 * @param telefono the telefono to set
	 */
	public void setTelefono(String telefono) {
		this.telefono = telefono;
	}
	
	

}
