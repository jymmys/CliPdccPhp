/**
 * 
 */
package org.sieca.everis.pdcc.model.transbordoMercancia;

/**
 * @author ytorregl
 *
 */
public class Registro {
	
	private String descripcion;
	private String numeroDut;
	private String tipoDut;
	/**
	 * 
	 */
	public Registro() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param descripcion
	 * @param numeroDut
	 * @param tipoDut
	 */
	public Registro(String descripcion, String numeroDut, String tipoDut) {
		super();
		this.descripcion = descripcion;
		this.numeroDut = numeroDut;
		this.tipoDut = tipoDut;
	}
	/**
	 * @return the descripcion
	 */
	public String getDescripcion() {
		return descripcion;
	}
	/**
	 * @param descripcion the descripcion to set
	 */
	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}
	/**
	 * @return the numeroDut
	 */
	public String getNumeroDut() {
		return numeroDut;
	}
	/**
	 * @param numeroDut the numeroDut to set
	 */
	public void setNumeroDut(String numeroDut) {
		this.numeroDut = numeroDut;
	}
	/**
	 * @return the tipoDut
	 */
	public String getTipoDut() {
		return tipoDut;
	}
	/**
	 * @param tipoDut the tipoDut to set
	 */
	public void setTipoDut(String tipoDut) {
		this.tipoDut = tipoDut;
	}
	
	

}
