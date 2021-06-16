/**
 * 
 */
package org.sieca.everis.pdcc.model.importacion;

/**
 * @author ytorregl
 *
 */
public class Exportador {

	
	private String nombre;
	private String direccion;
	private String idTributaria;
	private String tipoDocumento;
	private String numeroDocumento;
	private String pais;
	private String telefonoContacto;
	private String correoElectronico;
	/**
	 * 
	 */
	public Exportador() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param nombre
	 * @param direccion
	 * @param idTributaria
	 * @param tipoDocumento
	 * @param numeroDocumento
	 * @param pais
	 * @param telefonoContacto
	 * @param correoElectronico
	 */
	public Exportador(String nombre, String direccion, String idTributaria, String tipoDocumento,
			String numeroDocumento, String pais, String telefonoContacto, String correoElectronico) {
		super();
		this.nombre = nombre;
		this.direccion = direccion;
		this.idTributaria = idTributaria;
		this.tipoDocumento = tipoDocumento;
		this.numeroDocumento = numeroDocumento;
		this.pais = pais;
		this.telefonoContacto = telefonoContacto;
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
	 * @return the idTributaria
	 */
	public String getIdTributaria() {
		return idTributaria;
	}
	/**
	 * @param idTributaria the idTributaria to set
	 */
	public void setIdTributaria(String idTributaria) {
		this.idTributaria = idTributaria;
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
	 * @return the telefonoContacto
	 */
	public String getTelefonoContacto() {
		return telefonoContacto;
	}
	/**
	 * @param telefonoContacto the telefonoContacto to set
	 */
	public void setTelefonoContacto(String telefonoContacto) {
		this.telefonoContacto = telefonoContacto;
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
