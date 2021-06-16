/**
 * 
 */
package org.sieca.everis.pdcc.model.importacion;

/**
 * @author ytorregl
 *
 */
public class Declarante {
	
	private String tipoDocumento;
	private String numeroIdentificacion;
	private String nombre;
	private String codigo;
	private String pais;
	/**
	 * 
	 */
	public Declarante() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param tipoDocumento
	 * @param numeroIdentificacion
	 * @param nombre
	 * @param codigo
	 * @param pais
	 */
	public Declarante(String tipoDocumento, String numeroIdentificacion, String nombre, String codigo, String pais) {
		super();
		this.tipoDocumento = tipoDocumento;
		this.numeroIdentificacion = numeroIdentificacion;
		this.nombre = nombre;
		this.codigo = codigo;
		this.pais = pais;
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
	 * @return the numeroIdentificacion
	 */
	public String getNumeroIdentificacion() {
		return numeroIdentificacion;
	}
	/**
	 * @param numeroIdentificacion the numeroIdentificacion to set
	 */
	public void setNumeroIdentificacion(String numeroIdentificacion) {
		this.numeroIdentificacion = numeroIdentificacion;
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
	 * @return the codigo
	 */
	public String getCodigo() {
		return codigo;
	}
	/**
	 * @param codigo the codigo to set
	 */
	public void setCodigo(String codigo) {
		this.codigo = codigo;
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

	

}
