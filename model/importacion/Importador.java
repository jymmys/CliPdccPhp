/**
 * 
 */
package org.sieca.everis.pdcc.model.importacion;

/**
 * @author ytorregl
 *
 */
public class Importador {
	
	private String tipoDocumento;
	private String consignatario;
	private String domicilioFiscal;
	private String telefonoContacto;
	private String correoElectronico;
	private String pais;
	private String numeroDocumento;
	/**
	 * 
	 */
	public Importador() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param tipoDocumento
	 * @param consignatario
	 * @param domicilioFiscal
	 * @param telefonoContacto
	 * @param correoElectronico
	 * @param pais
	 * @param numeroDocumento
	 */
	public Importador(String tipoDocumento, String consignatario, String domicilioFiscal, String telefonoContacto,
			String correoElectronico, String pais, String numeroDocumento) {
		super();
		this.tipoDocumento = tipoDocumento;
		this.consignatario = consignatario;
		this.domicilioFiscal = domicilioFiscal;
		this.telefonoContacto = telefonoContacto;
		this.correoElectronico = correoElectronico;
		this.pais = pais;
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
	/**
	 * @return the consignatario
	 */
	public String getConsignatario() {
		return consignatario;
	}
	/**
	 * @param consignatario the consignatario to set
	 */
	public void setConsignatario(String consignatario) {
		this.consignatario = consignatario;
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


}
