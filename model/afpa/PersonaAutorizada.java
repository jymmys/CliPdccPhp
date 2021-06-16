/**
 * 
 */
package org.sieca.everis.pdcc.model.afpa;

/**
 * @author ytorregl
 *
 */
public class PersonaAutorizada {
	
	
	private String nombre;
	private String tipoDocumento;
	private String numeroDocumento;
	private String pais;
	private String domicilioFiscal;
	private String direccionNotificaciones;
	private String telefono;
	private String correoElectronico;

	
	/**
	 * 
	 */
	public PersonaAutorizada() {
		// TODO Auto-generated constructor stub
	}


	/**
	 * @param nombre
	 * @param tipoDocumento
	 * @param numeroDocumento
	 * @param pais
	 * @param domicilioFiscal
	 * @param direccionNotificaciones
	 * @param telefono
	 * @param correoElectronico
	 */
	public PersonaAutorizada(String nombre, String tipoDocumento, String numeroDocumento, String pais,
			String domicilioFiscal, String direccionNotificaciones, String telefono, String correoElectronico) {
		super();
		this.nombre = nombre;
		this.tipoDocumento = tipoDocumento;
		this.numeroDocumento = numeroDocumento;
		this.pais = pais;
		this.domicilioFiscal = domicilioFiscal;
		this.direccionNotificaciones = direccionNotificaciones;
		this.telefono = telefono;
		this.correoElectronico = correoElectronico;
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
	 * @return the pais
	 */
	public String getPais() {
		return pais;
	}


	/**
	 * @param pais the pais to set
	 */
	public void setPais(String pais) {
		this.pais = pais;
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
	 * @return the direccionNotificaciones
	 */
	public String getDireccionNotificaciones() {
		return direccionNotificaciones;
	}


	/**
	 * @param direccionNotificaciones the direccionNotificaciones to set
	 */
	public void setDireccionNotificaciones(String direccionNotificaciones) {
		this.direccionNotificaciones = direccionNotificaciones;
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


	/**
	 * @return the correoElectronico
	 */
	public String getCorreoElectronico() {
		return correoElectronico;
	}


	/**
	 * @param correoElectronico the correoElectronico to set
	 */
	public void setCorreoElectronico(String correoElectronico) {
		this.correoElectronico = correoElectronico;
	}
	
	


	
	
	
	


	
	
}
