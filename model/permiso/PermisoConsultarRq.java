/**
 * 
 */
package org.sieca.everis.pdcc.model.permiso;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class PermisoConsultarRq extends RequestBody{
	
	private String tipoCertificado;
	private String correlativoTransaccion;
	private String paisProcedencia;
	private String paisRecibe;
	private String tipoOperacion;
	/**
	 * 
	 */
	public PermisoConsultarRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the tipoCertificado
	 */
	public String getTipoCertificado() {
		return tipoCertificado;
	}
	/**
	 * @param tipoCertificado the tipoCertificado to set
	 */
	public void setTipoCertificado(String tipoCertificado) {
		this.tipoCertificado = tipoCertificado;
	}
	/**
	 * @return the correlativoTransaccion
	 */
	public String getCorrelativoTransaccion() {
		return correlativoTransaccion;
	}
	/**
	 * @param correlativoTransaccion the correlativoTransaccion to set
	 */
	public void setCorrelativoTransaccion(String correlativoTransaccion) {
		this.correlativoTransaccion = correlativoTransaccion;
	}
	/**
	 * @return the paisProcedencia
	 */
	public String getPaisProcedencia() {
		return paisProcedencia;
	}
	/**
	 * @param paisProcedencia the paisProcedencia to set
	 */
	public void setPaisProcedencia(String paisProcedencia) {
		this.paisProcedencia = paisProcedencia;
	}
	/**
	 * @return the paisRecibe
	 */
	public String getPaisRecibe() {
		return paisRecibe;
	}
	/**
	 * @param paisRecibe the paisRecibe to set
	 */
	public void setPaisRecibe(String paisRecibe) {
		this.paisRecibe = paisRecibe;
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
